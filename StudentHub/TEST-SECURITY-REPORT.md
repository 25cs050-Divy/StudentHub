# StudentHub Portal — Test & Security Report

**Project:** StudentHub Portal  
**Environment:** Windows + XAMPP, Apache, PHP 8.2, MySQL/MariaDB, phpMyAdmin  
**Report type:** Practical project test record and source-code review  
**Important:** This is not a professional penetration test or independent security certification.

## 1. Functional test record

The following results are based on the developer's local test reports during project setup. Retest on the final submitted copy before demonstration.

| Test | Expected result | Recorded result |
|---|---|---|
| Open project through localhost | Portal page loads | Passed — reported by developer |
| PHP-to-MySQL connection test | Connection success message | Passed — reported by developer |
| Student registration | New user and student records are created | Passed — reported by developer |
| Login with registered email/password | User is authenticated and sent to dashboard | Passed — reported by developer |
| Logout | Session is ended | Passed — reported by developer |
| Open protected dashboard after logout | Redirect to login | Passed — reported by developer |
| Attendance/results data accuracy | Values match database records | Not fully verified; some dashboard values remain demonstration/static values |
| Assignment workflow | Student can view/submit assignments | Not verified; dedicated assignment page is not included in supplied ZIP |
| About Us page | Page opens and displays project information | Not verified; dedicated About Us page is not included in supplied ZIP |

## 2. Security controls observed in source code

| Area | Control observed | Assessment / limitation |
|---|---|---|
| Password storage | Registration uses PHP `password_hash()` with `PASSWORD_DEFAULT` | Good baseline; verify stored values in the database during demo |
| Password verification | Login uses `password_verify()` | Present in login code |
| SQL injection mitigation | PDO prepared statements are used for registration and login queries | Present in reviewed authentication code; review all other queries separately |
| Session cookie settings | `HttpOnly`, `SameSite=Lax`, and conditional `Secure` cookie flag | Present in authentication code; HTTPS is not configured for the local XAMPP test |
| Session fixation | Session ID is regenerated after successful login | Present in login code |
| CSRF | CSRF token generated with `random_bytes()` and checked with `hash_equals()` | Present in reviewed registration/login flow; verify every state-changing form also uses it |
| Output escaping | `h()` uses `htmlspecialchars()` | Present; dynamic output should consistently use it |
| Authentication gate | `require_login()` redirects users without a session | Present on pages that call the guard; verify every private page |
| Database credentials | Local XAMPP default root account and blank password are configured | Suitable only for a local default setup; use a restricted DB user and strong password outside local development |
| Error handling | Database exceptions are logged and a generic message is shown | Present in database connection code; ensure logs are not publicly accessible |

## 3. Manual security checklist for demonstration

Mark each item only after testing it on the final copy.

- [ ] Invalid email format is rejected during registration/login.
- [ ] Empty required fields are rejected.
- [ ] A password shorter than the stated minimum is rejected.
- [ ] Duplicate email, username or student ID is rejected gracefully.
- [ ] Incorrect password does not log the user in.
- [ ] Password column stores a hash, not the original password.
- [ ] Logged-out users cannot open protected pages directly.
- [ ] Logout prevents access using the previous session.
- [ ] Forms that change data validate their CSRF token.
- [ ] User-provided text is escaped before being displayed.
- [ ] No real passwords, API keys or private student data are committed to GitHub.

## 4. Accessibility and compatibility checks

- [ ] Check keyboard navigation and visible focus on forms and links.
- [ ] Check that form fields have associated labels.
- [ ] Check image alternative text where images are used.
- [ ] Test the layout at desktop and mobile widths.
- [ ] Test with the PHP/MySQL versions used by the demonstration computer.

These accessibility and compatibility checks are listed for completion; they are not claimed as passed.

## 5. Known limitations at submission time

1. Some dashboard/profile academic content may still be static or demonstration data rather than database-derived values.
2. The supplied ZIP does not include a dedicated Assignments page or About Us page, although assignment-related database tables exist.
3. The project has been tested locally with XAMPP; deployment to a public hosting environment has not been verified.
4. The security controls listed above are based on source-code inspection and the developer's reported tests. No independent penetration test has been performed.

## 6. Conclusion

The supplied project demonstrates a PHP/MySQL student portal with registration, login, session-based page protection and multiple student-facing pages. Basic local registration, login, logout, database connectivity and post-logout dashboard protection were reported as successful. Further feature integration, manual checklist completion and independent security testing are recommended before production use.
