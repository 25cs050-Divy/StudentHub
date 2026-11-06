<?php
require_once __DIR__ . '/auth.php';
require_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Portal - Attendance</title>

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

            <a href="attendance.php" class="active">
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
                Student Portal / <strong>Attendance</strong>
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

            <div class="page-heading">
                <h1>Attendance</h1>
                <p>
                    Track your attendance subject-wise.
                </p>
            </div>


            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon purple">◉</div>

                    <div>
                        <span>Overall Attendance</span>
                        <h2>86.4%</h2>
                        <small class="success">
                            Above 75% requirement
                        </small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon green">✓</div>

                    <div>
                        <span>Classes Present</span>
                        <h2>121</h2>
                        <small>Out of 140 classes</small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon orange">!</div>

                    <div>
                        <span>Safe Classes</span>
                        <h2>8</h2>
                        <small>Can miss safely</small>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon blue">▤</div>

                    <div>
                        <span>Total Subjects</span>
                        <h2>6</h2>
                        <small>This semester</small>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-header">

                    <div>
                        <h3>Subject-wise Attendance</h3>
                        <p>Updated after every lecture</p>
                    </div>

                    <select>
                        <option>Semester 3</option>
                        <option>Semester 2</option>
                    </select>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>
                                <th>SUBJECT</th>
                                <th>CONDUCTED</th>
                                <th>PRESENT</th>
                                <th>ATTENDANCE</th>
                                <th>STATUS</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    <strong>Web Development</strong>
                                    <small>ITUE203</small>
                                </td>

                                <td>24</td>
                                <td>23</td>

                                <td>
                                    <div class="progress">
                                        <i style="width:96%"></i>
                                    </div>
                                    95.8%
                                </td>

                                <td>
                                    <span class="pill good">
                                        Excellent
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Computer Networks</strong>
                                    <small>ITUC204</small>
                                </td>

                                <td>26</td>
                                <td>22</td>

                                <td>
                                    <div class="progress">
                                        <i style="width:85%"></i>
                                    </div>
                                    84.6%
                                </td>

                                <td>
                                    <span class="pill good">
                                        Good
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Object Oriented Programming</strong>
                                    <small>ITUC205</small>
                                </td>

                                <td>25</td>
                                <td>21</td>

                                <td>
                                    <div class="progress">
                                        <i style="width:84%"></i>
                                    </div>
                                    84%
                                </td>

                                <td>
                                    <span class="pill good">
                                        Good
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Database Management</strong>
                                    <small>ITUC206</small>
                                </td>

                                <td>23</td>
                                <td>19</td>

                                <td>
                                    <div class="progress">
                                        <i style="width:83%"></i>
                                    </div>
                                    82.6%
                                </td>

                                <td>
                                    <span class="pill good">
                                        Good
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Design & Analysis of Algorithms</strong>
                                    <small>ITUC207</small>
                                </td>

                                <td>22</td>
                                <td>18</td>

                                <td>
                                    <div class="progress">
                                        <i style="width:82%"></i>
                                    </div>
                                    81.8%
                                </td>

                                <td>
                                    <span class="pill good">
                                        Good
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Digital Electronics</strong>
                                    <small>ITUC208</small>
                                </td>

                                <td>20</td>
                                <td>18</td>

                                <td>
                                    <div class="progress">
                                        <i style="width:90%"></i>
                                    </div>
                                    90%
                                </td>

                                <td>
                                    <span class="pill good">
                                        Excellent
                                    </span>
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