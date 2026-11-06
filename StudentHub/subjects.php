<?php
require_once __DIR__ . '/auth.php';
require_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Portal - Subjects</title>

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

            <a href="subjects.php" class="active">
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
                Student Portal / <strong>Subjects</strong>
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

                <h1>My Subjects</h1>

                <p>
                    Semester 3 • Computer Science & Engineering • 18 Credits
                </p>

            </div>


            <div class="subject-grid">


                <div class="subject-card">

                    <div class="subject-number purple">
                        01
                    </div>

                    <h3>Web Development</h3>

                    <p>
                        ITUE203 • 4 Credits
                    </p>

                    <hr>

                    <span>Faculty</span>
                    <strong>Dr. Patel</strong>

                    <span>Attendance</span>

                    <div class="progress">
                        <i style="width:96%"></i>
                    </div>

                    <small>95.8%</small>

                    <a href="attendance.php"
                       class="subject-link">
                        View Attendance →
                    </a>

                </div>


                <div class="subject-card">

                    <div class="subject-number blue">
                        02
                    </div>

                    <h3>Computer Networks</h3>

                    <p>
                        ITUC204 • 3 Credits
                    </p>

                    <hr>

                    <span>Faculty</span>
                    <strong>Prof. Shah</strong>

                    <span>Attendance</span>

                    <div class="progress">
                        <i style="width:85%"></i>
                    </div>

                    <small>84.6%</small>

                    <a href="attendance.php"
                       class="subject-link">
                        View Attendance →
                    </a>

                </div>


                <div class="subject-card">

                    <div class="subject-number orange">
                        03
                    </div>

                    <h3>Object Oriented Programming</h3>

                    <p>
                        ITUC205 • 3 Credits
                    </p>

                    <hr>

                    <span>Faculty</span>
                    <strong>Dr. Mehta</strong>

                    <span>Attendance</span>

                    <div class="progress">
                        <i style="width:84%"></i>
                    </div>

                    <small>84%</small>

                    <a href="attendance.php"
                       class="subject-link">
                        View Attendance →
                    </a>

                </div>


                <div class="subject-card">

                    <div class="subject-number green">
                        04
                    </div>

                    <h3>Database Management</h3>

                    <p>
                        ITUC206 • 3 Credits
                    </p>

                    <hr>

                    <span>Faculty</span>
                    <strong>Prof. Joshi</strong>

                    <span>Attendance</span>

                    <div class="progress">
                        <i style="width:83%"></i>
                    </div>

                    <small>82.6%</small>

                    <a href="attendance.php"
                       class="subject-link">
                        View Attendance →
                    </a>

                </div>


                <div class="subject-card">

                    <div class="subject-number purple">
                        05
                    </div>

                    <h3>Design & Analysis of Algorithms</h3>

                    <p>
                        ITUC207 • 3 Credits
                    </p>

                    <hr>

                    <span>Faculty</span>
                    <strong>Dr. Rao</strong>

                    <span>Attendance</span>

                    <div class="progress">
                        <i style="width:82%"></i>
                    </div>

                    <small>81.8%</small>

                    <a href="attendance.php"
                       class="subject-link">
                        View Attendance →
                    </a>

                </div>


                <div class="subject-card">

                    <div class="subject-number blue">
                        06
                    </div>

                    <h3>Digital Electronics</h3>

                    <p>
                        ITUC208 • 2 Credits
                    </p>

                    <hr>

                    <span>Faculty</span>
                    <strong>Prof. Kumar</strong>

                    <span>Attendance</span>

                    <div class="progress">
                        <i style="width:90%"></i>
                    </div>

                    <small>90%</small>

                    <a href="attendance.php"
                       class="subject-link">
                        View Attendance →
                    </a>

                </div>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>

</body>
</html>