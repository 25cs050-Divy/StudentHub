<?php
require_once __DIR__ . '/auth.php';

if (!empty($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $fullName = trim((string)($_POST['full_name'] ?? ''));
    $studentCode = trim((string)($_POST['student_code'] ?? ''));
    $username = trim((string)($_POST['username'] ?? ''));
    $email = trim((string)($_POST['email'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    $confirm = (string)($_POST['confirm_password'] ?? '');

    if ($fullName === '' || $studentCode === '' || $username === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Complete all fields and enter a valid email address.';
    } elseif (strlen($password) < 8) {
        $error = 'Choose a password with at least 8 characters.';
    } elseif ($password !== $confirm) {
        $error = 'The passwords do not match.';
    } else {
        try {
            $pdo->beginTransaction();
            $stmt = $pdo->prepare('INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password_hash)');
            $stmt->execute([
                'username' => $username,
                'email' => $email,
                'password_hash' => password_hash($password, PASSWORD_DEFAULT),
            ]);
            $userId = (int)$pdo->lastInsertId();
            $stmt = $pdo->prepare('INSERT INTO students (user_id, student_code, full_name) VALUES (:user_id, :student_code, :full_name)');
            $stmt->execute(['user_id' => $userId, 'student_code' => $studentCode, 'full_name' => $fullName]);
            $pdo->commit();
            header('Location: index.php?registered=1');
            exit;
        } catch (PDOException $e) {
            if ($pdo->inTransaction()) $pdo->rollBack();
            error_log('StudentHub registration error: ' . $e->getMessage());
            $error = 'Registration could not be completed. The email, username or student ID may already be registered.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
<div class="login-container">
    <div class="login-info">
        <div class="login-logo">🎓</div>
        <h1>Join Student Portal</h1>
        <p>Create your student account to access your academic information.</p>
        <div class="login-features">
            <div>📚 <span>Manage Subjects</span></div>
            <div>📅 <span>Check Timetable</span></div>
            <div>📊 <span>Track Attendance</span></div>
            <div>📝 <span>View Results</span></div>
        </div>
    </div>
    <div class="login-box register-box">
        <h2>Create Account</h2>
        <p class="login-subtitle">Register your student details</p>
        <form method="post" action="register.php">
            <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
            <div class="form-group"><label for="full_name">Full name</label><input id="full_name" name="full_name" required maxlength="120" autocomplete="name" value="<?= h((string)($_POST['full_name'] ?? '')) ?>"></div>
            <div class="form-group"><label for="student_code">Student ID / Code</label><input id="student_code" name="student_code" required maxlength="30" value="<?= h((string)($_POST['student_code'] ?? '')) ?>"></div>
            <div class="form-group"><label for="username">Username</label><input id="username" name="username" required maxlength="50" autocomplete="username" value="<?= h((string)($_POST['username'] ?? '')) ?>"></div>
            <div class="form-group"><label for="email">Email address</label><input type="email" id="email" name="email" required maxlength="254" autocomplete="email" value="<?= h((string)($_POST['email'] ?? '')) ?>"></div>
            <div class="form-group"><label for="password">Password (minimum 8 characters)</label><input type="password" id="password" name="password" required minlength="8" autocomplete="new-password"></div>
            <div class="form-group"><label for="confirm_password">Confirm password</label><input type="password" id="confirm_password" name="confirm_password" required minlength="8" autocomplete="new-password"></div>
            <button type="submit" class="login-button">Create Account</button>
            <?php if ($error !== ''): ?><p class="login-message error" role="alert"><?= h($error) ?></p><?php endif; ?>
        </form>
        <p class="register-prompt">Already registered? <a href="index.php">Login</a></p>
    </div>
</div>
</body>
</html>
