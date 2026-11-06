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

    <title>Student Portal - Notices</title>

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

            <a href="notices.php" class="active">
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
                Student Portal / <strong>Notices</strong>
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

                <h1>Notices & Announcements</h1>

                <p>
                    Stay updated with college announcements.
                </p>

            </div>


            <div class="toolbar">

                <input
                    type="search"
                    class="search"
                    placeholder="Search notices..."
                >

                <select>

                    <option>All Categories</option>
                    <option>Academic</option>
                    <option>Examination</option>
                    <option>Events</option>

                </select>

            </div>


            <div class="card notices-list">


                <article class="notice-large">

                    <div class="notice-big red">
                        !
                    </div>

                    <div>

                        <h3>
                            Mid-Semester Examination Schedule Released
                        </h3>

                        <p>
                            The examination cell has published the
                            mid-semester examination schedule.
                            Students should verify their subjects,
                            dates and examination rooms.
                        </p>

                        <small>
                            20 August 2026 • Examination Cell
                        </small>

                    </div>

                </article>


                <article class="notice-large">

                    <div class="notice-big blue">
                        ▣
                    </div>

                    <div>

                        <h3>
                            Web Development Lab Submission
                        </h3>

                        <p>
                            All students must submit Practical 3
                            through the department portal before
                            the deadline.
                        </p>

                        <small>
                            19 August 2026 • CSE Department
                        </small>

                    </div>

                </article>


                <article class="notice-large">

                    <div class="notice-big green">
                        ★
                    </div>

                    <div>

                        <h3>
                            Scholarship Renewal Window Open
                        </h3>

                        <p>
                            Eligible students can submit scholarship
                            renewal documents through the student section.
                        </p>

                        <small>
                            18 August 2026 • Student Section
                        </small>

                    </div>

                </article>


                <article class="notice-large">

                    <div class="notice-big purple">
                        ◈
                    </div>

                    <div>

                        <h3>
                            Technical Club Orientation
                        </h3>

                        <p>
                            Join the orientation session for coding,
                            robotics and open-source clubs.
                        </p>

                        <small>
                            16 August 2026 • Student Activities
                        </small>

                    </div>

                </article>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>

</body>
</html>