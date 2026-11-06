
<?php
require_once __DIR__ . '/auth.php';
require_login();

// Fetch logged-in student's details
$stmt = $pdo->prepare("
    SELECT
        u.email,
        s.full_name,
        s.student_code,
        s.program,
        s.semester
    FROM users u
    JOIN students s ON s.user_id = u.id
    WHERE u.id = :user_id
");

$stmt->execute([
    'user_id' => $_SESSION['user_id']
]);

$student = $stmt->fetch();

if (!$student) {
    http_response_code(404);
    exit("Student profile not found.");
}

$studentName = $student['full_name'];
$studentCode = $student['student_code'];
$studentEmail = $student['email'];
$program = $student['program'] ?? 'Not specified';
$semester = $student['semester'] ?? 'Not specified';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Portal - Profile</title>

    <link rel="stylesheet" href="style.css">
    

</head>

<body>

<div class="portal">

    <aside class="sidebar">

        <div class="logo-area">

            <div class="logo">SP</div>

            <div>
                <h2>Student<span>Portal</span></h2>
                <small>ACADEMIC ERP</small>
            </div>

        </div>


        <nav>

            <p class="nav-title">MAIN</p>

            <a href="dashboard.php">
                <span>▦</span> Dashboard
            </a>

            <a href="attendance.php">
                <span>◉</span> Attendance
            </a>

            <a href="subjects.php">
                <span>▤</span> Subjects
            </a>

            <a href="timetable.php">
                <span>◷</span> Timetable
            </a>

            <a href="results.php">
                <span>▥</span> Results
            </a>

            <p class="nav-title">STUDENT</p>

            <a href="notices.php">
                <span>◈</span> Notices
                <b class="badge">4</b>
            </a>

            <a href="profile.php" class="active">
                <span>◎</span> Profile
            </a>

            <a href="settings.php">
                <span>⚙</span> Settings
            </a>

            <a href="help.php">
                <span>?</span> Help & Support
            </a>

        </nav>


        <div class="sidebar-bottom">

            <div class="student-mini">

                <div class="avatar">DA</div>

                <div>
                    <strong>Divya</strong>
                    <small>CSE • Semester 3</small>
                </div>

            </div>

            <form action="logout.php" method="post" class="signout-form"><input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>"><button type="submit" class="logout signout-button">↪ Sign Out</button></form>

        </div>

    </aside>


    <main class="main-content">

        <header class="topbar">

            <div class="breadcrumb">
                Student Portal / <strong>Profile</strong>
            </div>

            <div class="top-right">

                <button class="notification">
                    ♢ <i></i>
                </button>

                <div class="user-small">
                    <div class="avatar">DA</div>
                    <span>Divya</span>
                </div>

            </div>

        </header>


        <section class="content">

            <div class="page-heading">

                <h1>My Profile</h1>

                <p>
                    View and manage your student information.
                </p>

            </div>


            <div class="card">

                <div class="profile-header">

                    <div class="profile-avatar">
                        DA
                    </div>

                    <div>

                        <h2>
                            Divy Alpeshkumar
                        </h2>

                        <p>
                            Student ID: 25CS050
                            • B.Tech CSE
                            • Semester 3
                        </p>

                        <span class="pill good">
                            Active Student
                        </span>

                    </div>

                </div>


                <form class="profile-edit-form">

                    <div class="form-grid">

                        <div class="form-group">

                            <label>
                                FULL NAME
                            </label>

                            <input
                                type="text"
                                value="Divya Alpeshkumar"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                STUDENT ID
                            </label>

                            <input
                                type="text"
                                value="25CS050"
                                readonly
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                EMAIL
                            </label>

                            <input
                                type="email"
                                value="divya.student@example.com"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                PHONE
                            </label>

                            <input
                                type="tel"
                                value="+91 98XXXXXX10"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                PROGRAM
                            </label>

                            <input
                                type="text"
                                value="B.Tech Computer Science & Engineering"
                                readonly
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                SEMESTER
                            </label>

                            <select>

                                <option>
                                    Semester 3
                                </option>

                                <option>
                                    Semester 4
                                </option>

                            </select>

                        </div>


                        <div class="form-group full">

                            <label>
                                ADDRESS
                            </label>

                            <textarea>Student Residence, Gujarat, India</textarea>

                        </div>

                    </div>


                    <div class="form-buttons">

                        <button
                            type="reset"
                            class="btn secondary">

                            Cancel

                        </button>

                        <button
                            type="submit"
                            class="btn primary">

                            Save Changes

                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>

</body>
</html>