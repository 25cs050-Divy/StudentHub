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

    <title>Student Portal - Help</title>

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

            <a href="settings.php">
                <span>⚙</span> Settings
            </a>

            <a href="help.php" class="active">
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
                Student Portal / <strong>Help & Support</strong>
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

                <h1>Help & Support</h1>

                <p>
                    Find answers or contact the student support team.
                </p>

            </div>


            <div class="support-grid">


                <div class="support-card">

                    <div class="support-icon">
                        ?
                    </div>

                    <h3>Help Center</h3>

                    <p>
                        Browse guides and information
                        about portal features.
                    </p>

                    <a href="#faq">
                        Browse FAQs →
                    </a>

                </div>


                <div class="support-card">

                    <div class="support-icon">
                        ✉
                    </div>

                    <h3>Contact Support</h3>

                    <p>
                        Send your question to
                        the student help desk.
                    </p>

                    <a href="mailto:support@example.com">
                        Email Support →
                    </a>

                </div>


                <div class="support-card">

                    <div class="support-icon">
                        ☎
                    </div>

                    <h3>Student Desk</h3>

                    <p>
                        Monday - Friday
                        <br>
                        9:00 AM - 5:00 PM
                    </p>

                    <a href="#">
                        View Details →
                    </a>

                </div>

            </div>


            <div id="faq" class="faq-section">

                <h2>
                    Frequently Asked Questions
                </h2>


                <details open>

                    <summary>
                        How is attendance percentage calculated?
                    </summary>

                    <p>
                        Attendance is calculated by dividing
                        the number of classes attended by the
                        number of classes conducted.
                    </p>

                </details>


                <details>

                    <summary>
                        Where can I download my results?
                    </summary>

                    <p>
                        Open the Results page from the sidebar
                        and select the required semester.
                    </p>

                </details>


                <details>

                    <summary>
                        How can I update my profile?
                    </summary>

                    <p>
                        Open Profile from the sidebar,
                        edit your information and click
                        Save Changes.
                    </p>

                </details>


                <details>

                    <summary>
                        Who should I contact for timetable errors?
                    </summary>

                    <p>
                        Contact the department office or
                        student support desk with your
                        student ID and class details.
                    </p>

                </details>

            </div>

        </section>

    </main>

</div>

<script src="app.js"></script>

</body>
</html>