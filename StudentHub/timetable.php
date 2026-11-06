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

    <title>Student Portal - Timetable</title>

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

            <a href="timetable.php" class="active">
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
                Student Portal / <strong>Timetable</strong>
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

                <h1>Class Timetable</h1>

                <p>
                    Weekly schedule for Semester 3
                </p>

            </div>


            <div class="toolbar">

                <select>
                    <option>
                        Current Week • 17 - 22 August
                    </option>

                    <option>
                        Next Week
                    </option>
                </select>

                <button class="btn primary">
                    ＋ Add Reminder
                </button>

            </div>


            <div class="card">

                <div class="table-container">

                    <table class="timetable">

                        <thead>

                            <tr>
                                <th>TIME</th>
                                <th>MONDAY</th>
                                <th>TUESDAY</th>
                                <th>WEDNESDAY</th>
                                <th>THURSDAY</th>
                                <th>FRIDAY</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>09:00 - 10:00</td>

                                <td>
                                    DBMS
                                    <small>A-301</small>
                                </td>

                                <td>
                                    Networks
                                    <small>C-102</small>
                                </td>

                                <td>
                                    Web Development
                                    <small>A-204</small>
                                </td>

                                <td>
                                    Web Development
                                    <small>A-204</small>
                                </td>

                                <td>
                                    OOP
                                    <small>B-106</small>
                                </td>

                            </tr>


                            <tr>

                                <td>10:15 - 11:15</td>

                                <td>
                                    Algorithms
                                    <small>B-205</small>
                                </td>

                                <td>
                                    Digital Electronics
                                    <small>Lab E-01</small>
                                </td>

                                <td>
                                    Networks
                                    <small>C-102</small>
                                </td>

                                <td>
                                    Networks Lab
                                    <small>C-102</small>
                                </td>

                                <td>
                                    DBMS
                                    <small>A-301</small>
                                </td>

                            </tr>


                            <tr class="break-row">

                                <td>11:15 - 12:00</td>

                                <td colspan="5">
                                    BREAK
                                </td>

                            </tr>


                            <tr>

                                <td>12:00 - 13:00</td>

                                <td>
                                    OOP
                                    <small>B-106</small>
                                </td>

                                <td>
                                    Web Development
                                    <small>A-204</small>
                                </td>

                                <td>
                                    Algorithms
                                    <small>B-205</small>
                                </td>

                                <td>
                                    OOP
                                    <small>B-106</small>
                                </td>

                                <td>
                                    Digital Electronics
                                    <small>E-01</small>
                                </td>

                            </tr>


                            <tr>

                                <td>14:00 - 15:00</td>

                                <td>
                                    Web Development Lab
                                    <small>Lab W-02</small>
                                </td>

                                <td>
                                    DBMS Lab
                                    <small>Lab D-01</small>
                                </td>

                                <td>
                                    Project Hour
                                    <small>Innovation Lab</small>
                                </td>

                                <td>
                                    DBMS
                                    <small>A-301</small>
                                </td>

                                <td>
                                    Networks Lab
                                    <small>C-102</small>
                                </td>

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