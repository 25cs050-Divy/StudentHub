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

    <title>Student Portal - Settings</title>

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

            <a href="profile.php">
                <span>◎</span> Profile
            </a>

            <a href="settings.php" class="active">
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
                Student Portal / <strong>Settings</strong>
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

                <h1>Settings</h1>

                <p>
                    Customize your student portal experience.
                </p>

            </div>


            <div class="card">

                <div class="card-header">

                    <div>
                        <h3>Notification Settings</h3>
                        <p>
                            Manage the notifications you receive.
                        </p>
                    </div>

                </div>


                <div class="settings-list">


                    <div class="setting">

                        <div>

                            <strong>
                                Email Notifications
                            </strong>

                            <small>
                                Receive important academic updates.
                            </small>

                        </div>

                        <button class="toggle active">
                            <i></i>
                        </button>

                    </div>


                    <div class="setting">

                        <div>

                            <strong>
                                Assignment Reminders
                            </strong>

                            <small>
                                Get reminders before deadlines.
                            </small>

                        </div>

                        <button class="toggle active">
                            <i></i>
                        </button>

                    </div>


                    <div class="setting">

                        <div>

                            <strong>
                                Attendance Alerts
                            </strong>

                            <small>
                                Alert me when attendance falls below 75%.
                            </small>

                        </div>

                        <button class="toggle active">
                            <i></i>
                        </button>

                    </div>


                    <div class="setting">

                        <div>

                            <strong>
                                Result Announcements
                            </strong>

                            <small>
                                Notify me when new results are published.
                            </small>

                        </div>

                        <button class="toggle active">
                            <i></i>
                        </button>

                    </div>

                </div>

            </div>


            <div class="card settings-card">

                <div class="card-header">

                    <div>
                        <h3>Account Preferences</h3>
                        <p>
                            Customize language and regional settings.
                        </p>
                    </div>

                </div>


                <div class="form-grid">

                    <div class="form-group">

                        <label>
                            LANGUAGE
                        </label>

                        <select>

                            <option>English</option>
                            <option>Hindi</option>
                            <option>Gujarati</option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            TIME ZONE
                        </label>

                        <select>

                            <option>
                                Asia/Kolkata (IST)
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-buttons">

                    <button class="btn primary">
                        Save Preferences
                    </button>

                </div>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>

</body>
</html>