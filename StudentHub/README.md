# StudentHub Portal

A student portal project built with PHP, MySQL, HTML, CSS and JavaScript. It is intended to run locally using XAMPP.

## Current project contents

The supplied project includes PHP pages for login, registration, dashboard, attendance, results, subjects, timetable, notices, settings, help and profile, plus shared styling and JavaScript. The database schema is in `database/studenthub.sql`.

**Scope note:** This README documents the project as supplied. Some academic/dashboard values are still demonstration or hardcoded values and are not all calculated from database records. Dedicated Assignments and About Us pages are not included in this ZIP. Do not describe those features as complete unless you add and test them.

## Requirements

- Windows (for the instructions below)
- XAMPP with Apache, MySQL/MariaDB and PHP
- PHP PDO MySQL extension enabled
- A web browser

## Installation and setup

1. Install and open XAMPP.
2. Start **Apache** and **MySQL** in the XAMPP Control Panel.
3. Extract the project folder into `C:\xampp\htdocs\StudentHub`.
4. Open phpMyAdmin at <http://localhost/phpmyadmin/>.
5. Create a database named `studenthub`, or select the existing database with that name.
6. Select the `studenthub` database, choose **Import**, select `database/studenthub.sql`, and run the import. The SQL script creates the database and its tables. If the tables already exist and contain data, back up the database before importing again.
7. Check `config/database.php`. The default local XAMPP settings are host `localhost`, database `studenthub`, user `root`, and an empty password. Change these values if your local MySQL account is configured differently.
8. Visit <http://localhost/StudentHub/index.php>.
9. Choose **Create an account**, register a test student, and then log in using that email and password.

## Main pages

- `index.php` — login
- `register.php` — student registration
- `dashboard.php` — student dashboard
- `profile.php` — student profile
- `attendance.php` — attendance page
- `results.php` — results page
- `subjects.php` — subjects page
- `timetable.php` — timetable page
- `notices.php` — notices page
- `settings.php` — settings page
- `help.php` — help page
- `logout.php` — logout

## Database tables

The SQL schema creates `users`, `students`, `subjects`, `attendance`, `results`, `assignments`, `assignment_submissions`, `notices`, and `timetable`.

## Test account

Create your own account through the registration page. No default username/password is supplied. Do not commit real passwords or private student information to a public repository.

## Notes

- This is a local academic project. It has not been independently security-audited or assessed for production deployment.
- Use sample data when demonstrating the project.
- For public hosting, configure a non-root database user, strong credentials, HTTPS, backups, and appropriate server settings.
