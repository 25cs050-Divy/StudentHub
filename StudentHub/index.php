<?php
require_once __DIR__ . '/auth.php';

if (!empty($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $email = trim((string)($_POST['email'] ?? ''));
    $password = (string)($_POST['password'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password === '') {
        $error = 'Enter a valid email address and password.';
    } else {
        $stmt = $pdo->prepare(
            'SELECT u.id, u.username, u.email, u.password_hash, s.id AS student_id, s.full_name
             FROM users u LEFT JOIN students s ON s.user_id = u.id WHERE u.email = :email LIMIT 1'
        );
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = (int)$user['id'];
            $_SESSION['student_id'] = isset($user['student_id']) ? (int)$user['student_id'] : null;
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['full_name'] ?: $user['username'];
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            header('Location: dashboard.php');
            exit;
        }
        $error = 'Invalid email or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
<div class="login-container">
    <div class="login-info">
        <div class="login-logo">🎓</div>
        <h1>Student Portal</h1>
        <p>Welcome to your complete academic management portal.</p>
        <div class="login-features">
            <div>📚 <span>Manage Subjects</span></div>
            <div>📅 <span>Check Timetable</span></div>
            <div>📊 <span>Track Attendance</span></div>
            <div>📝 <span>View Results</span></div>
        </div>
    </div>
    <div class="login-box">
        <h2>Welcome Back!</h2>
        <p class="login-subtitle">Login to access your student dashboard</p>
        <?php if (isset($_GET['registered'])): ?>
            <p class="login-message success" role="status">Account created. You can now log in.</p>
        <?php endif; ?>
        <form id="loginForm" method="post" action="index.php">
            <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your registered email" required maxlength="254" autocomplete="username" value="<?= h((string)($_POST['email'] ?? '')) ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
            </div>
            <button type="submit" class="login-button">Login</button>
            <?php if ($error !== ''): ?>
                <p class="login-message error" role="alert"><?= h($error) ?></p>
            <?php endif; ?>
        </form>
        <p class="register-prompt">New student? <a href="register.php">Create an account</a></p>
    </div>
</div>
</body>
</html>
