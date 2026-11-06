
<?php
require_once __DIR__ . '/auth.php';
require_login();

// Fetch the logged-in student's information
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student Portal - Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="portal">

    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div class="logo-area">
            <div class="logo">SP</div>

            <div>
                <h2>Student<span>Portal</span></h2>
                <small>ACADEMIC ERP</small>
            </div>
        </div>

        <nav class="navigation">

            <p class="nav-title">MAIN</p>

            <a href="dashboard.php" class="active">
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

            <a href="profile.php">
                <span>◎</span> Profile
            </a>

            <a href="settings.php">
                <span>⚙</span> Settings
            </a>

            <a href="help.php">
                <span>?</span> Help & Support
            </a>
            <form action="logout.php" method="post" class="inline-logout"><input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>"><button type="submit" class="logout-link">🚪 Logout</button></form>

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


    <!-- ================= MAIN ================= -->

    <main class="main-content">

        <header class="topbar">

            <div class="breadcrumb">
                Student Portal / <strong>Dashboard</strong>
            </div>

            <div class="top-right">

                <button class="notification">
                    ♢
                    <i></i>
                </button>

                <div class="user-small">
                    <div class="avatar">DA</div>
                    <span>Divya</span>
                </div>

            </div>

        </header>


        <section class="content">

            <!-- Welcome -->

            <div class="welcome">

                <div>
                    <p class="date">
                        THURSDAY, 20 AUGUST 2026
                    </p>

                    <h1>
                        Good morning, Divya! 👋
                    </h1>

                    <p>
                        Here is your academic overview for this semester.
                    </p>
                </div>

                <a href="timetable.php" class="btn primary">
                    View Today's Schedule →
                </a>

            </div>


            <!-- Statistics -->

            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon purple">
                        ◉
                    </div>

                    <div>
                        <span>Overall Attendance</span>
                        <h2>86.4%</h2>
                        <small class="success">
                            ↑ 2.1% this month
                        </small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon blue">
                        ★
                    </div>

                    <div>
                        <span>Current CGPA</span>
                        <h2>8.72</h2>
                        <small class="success">
                            ↑ 0.18 from last semester
                        </small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon orange">
                        ▤
                    </div>

                    <div>
                        <span>Active Subjects</span>
                        <h2>6</h2>
                        <small>
                            18 credits this semester
                        </small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon green">
                        ✓
                    </div>

                    <div>
                        <span>Assignments</span>
                        <h2>14/16</h2>
                        <small class="warning">
                            2 pending submissions
                        </small>
                    </div>

                </div>

            </div>


            <!-- Dashboard Row -->

            <div class="dashboard-row">

                <!-- Attendance -->

                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Attendance Overview</h3>
                            <p>Monthly attendance percentage</p>
                        </div>

                        <select>
                            <option>This Semester</option>
                            <option>Last Semester</option>
                        </select>

                    </div>


                    <div class="chart">

                        <div class="chart-labels">
                            <span>100%</span>
                            <span>75%</span>
                            <span>50%</span>
                            <span>25%</span>
                            <span>0%</span>
                        </div>

                        <div class="bars">

                            <div>
                                <i style="height:74%"></i>
                                <small>Jan</small>
                            </div>

                            <div>
                                <i style="height:80%"></i>
                                <small>Feb</small>
                            </div>

                            <div>
                                <i style="height:72%"></i>
                                <small>Mar</small>
                            </div>

                            <div>
                                <i style="height:87%"></i>
                                <small>Apr</small>
                            </div>

                            <div>
                                <i style="height:82%"></i>
                                <small>May</small>
                            </div>

                            <div>
                                <i style="height:91%"></i>
                                <small>Jun</small>
                            </div>

                            <div>
                                <i style="height:86%"></i>
                                <small>Jul</small>
                            </div>

                            <div>
                                <i style="height:88%"></i>
                                <small>Aug</small>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Today's Classes -->

                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Today's Classes</h3>
                            <p>Thursday, 20 August</p>
                        </div>

                        <a href="timetable.php">
                            View All
                        </a>

                    </div>


                    <div class="class-list">

                        <div class="class">

                            <div class="class-time">
                                09:00
                                <small>10:00</small>
                            </div>

                            <div class="class-info">
                                <strong>Web Development</strong>
                                <small>Room A-204 • Dr. Patel</small>
                            </div>

                            <span class="status completed">
                                Completed
                            </span>

                        </div>


                        <div class="class">

                            <div class="class-time">
                                10:15
                                <small>11:15</small>
                            </div>

                            <div class="class-info">
                                <strong>Computer Networks</strong>
                                <small>Lab C-102 • Prof. Shah</small>
                            </div>

                            <span class="status next">
                                Next
                            </span>

                        </div>


                        <div class="class">

                            <div class="class-time">
                                12:00
                                <small>13:00</small>
                            </div>

                            <div class="class-info">
                                <strong>Object Oriented Programming</strong>
                                <small>Room B-106 • Dr. Mehta</small>
                            </div>

                        </div>


                        <div class="class">

                            <div class="class-time">
                                14:00
                                <small>15:00</small>
                            </div>

                            <div class="class-info">
                                <strong>Database Management</strong>
                                <small>Room A-301 • Prof. Joshi</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Bottom Row -->

            <div class="dashboard-row bottom-row">

                <!-- Notices -->

                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Recent Notices</h3>
                            <p>Latest college announcements</p>
                        </div>

                        <a href="notices.php">
                            See All
                        </a>

                    </div>


                    <div class="notice">

                        <div class="notice-icon red">
                            !
                        </div>

                        <div>
                            <strong>
                                Mid-Semester Examination Schedule
                            </strong>

                            <small>
                                Examination Cell • 2 hours ago
                            </small>
                        </div>

                    </div>


                    <div class="notice">

                        <div class="notice-icon blue">
                            i
                        </div>

                        <div>
                            <strong>
                                Web Development Lab Submission
                            </strong>

                            <small>
                                CSE Department • Yesterday
                            </small>
                        </div>

                    </div>


                    <div class="notice">

                        <div class="notice-icon green">
                            ✓
                        </div>

                        <div>
                            <strong>
                                Scholarship Renewal Window Open
                            </strong>

                            <small>
                                Student Section • 2 days ago
                            </small>
                        </div>

                    </div>

                </div>


                <!-- Quick Actions -->

                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Quick Actions</h3>
                            <p>Frequently used utilities</p>
                        </div>

                    </div>


                    <div class="quick-actions">

                        <a href="attendance.php">
                            <span>◉</span>
                            Attendance
                        </a>

                        <a href="results.php">
                            <span>▥</span>
                            Results
                        </a>

                        <a href="subjects.php">
                            <span>▤</span>
                            Subjects
                        </a>

                        <a href="profile.php">
                            <span>◎</span>
                            My Profile
                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>


</body>
</html>