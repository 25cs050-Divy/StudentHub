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

    <title>Student Portal - Results</title>

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

            <a href="results.php" class="active">
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
                Student Portal / <strong>Results</strong>
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

                <h1>Academic Results</h1>

                <p>
                    Semester-wise academic performance
                </p>

            </div>


            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon purple">
                        ★
                    </div>

                    <div>
                        <span>Current CGPA</span>
                        <h2>8.72</h2>
                        <small>Excellent Standing</small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon green">
                        A+
                    </div>

                    <div>
                        <span>Best Grade</span>
                        <h2>A+</h2>
                        <small>Web Development</small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon blue">
                        18
                    </div>

                    <div>
                        <span>Current Credits</span>
                        <h2>18</h2>
                        <small>This semester</small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon orange">
                        2
                    </div>

                    <div>
                        <span>Completed Semesters</span>
                        <h2>2</h2>
                        <small>Successfully completed</small>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-header">

                    <div>
                        <h3>Semester 2 Results</h3>
                        <p>
                            Published on 18 June 2026
                        </p>
                    </div>

                    <button class="btn secondary">
                        Download Marksheet
                    </button>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>
                                <th>CODE</th>
                                <th>SUBJECT</th>
                                <th>CREDITS</th>
                                <th>GRADE</th>
                                <th>GRADE POINT</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>
                                <td>ITUC101</td>
                                <td>ICT</td>
                                <td>3</td>
                                <td>
                                    <span class="pill good">A+</span>
                                </td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>ITUC102</td>
                                <td>Data Structures</td>
                                <td>4</td>
                                <td>
                                    <span class="pill good">A</span>
                                </td>
                                <td>9</td>
                            </tr>

                            <tr>
                                <td>ITUC103</td>
                                <td>Discrete Mathematics</td>
                                <td>4</td>
                                <td>
                                    <span class="pill good">A</span>
                                </td>
                                <td>9</td>
                            </tr>

                            <tr>
                                <td>ITUE104</td>
                                <td>Web Fundamentals</td>
                                <td>3</td>
                                <td>
                                    <span class="pill good">A+</span>
                                </td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>ITUE105</td>
                                <td>Digital Logic</td>
                                <td>3</td>
                                <td>
                                    <span class="pill good">B+</span>
                                </td>
                                <td>8</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>

</body>
</html>