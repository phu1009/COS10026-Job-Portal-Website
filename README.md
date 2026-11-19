# COS10026 – IT Job Portal Website (HTML/CSS → PHP/MySQL)

Group project for **COS10026 Computing Technology Inquiry Project** at Swinburne University of Technology (Hanoi), Semester 1 2024. The team built a job-recruitment website for **SwinTech**, a fictional IT company, first as a static site and then as a dynamic PHP application backed by MySQL.

| Folder | Part | Period |
| --- | --- | --- |
| [`part1-html-css`](part1-html-css) | Static website: home, job descriptions, application form, about-the-team and enhancements pages | Feb 2024 |
| [`part2-php-mysql`](part2-php-mysql) | Dynamic version: server-side processing of Expressions of Interest (EOI), HR manager page, reusable includes | Mar – Apr 2024 |
| [`docs`](docs) | Individual reports for Part 1 and Part 2 | 2024 |

## Tech stack
HTML5 · CSS3 · PHP · MySQL / MariaDB

## Features (Part 2)
- `apply.php` → `processEOI.php`: sanitises and validates every field on the server (`validation.php`) and stores the application in MySQL
- `manage.php` → `processManage.php`: HR manager queries — list all EOIs (sortable), filter by job reference or applicant name, delete EOIs by job reference, change an EOI's status
- Shared page fragments (`head.inc`, `header.inc`, `footer.inc`, `menu.inc`) to keep pages consistent

## Run (Part 2)
1. Serve the folder with PHP (e.g. XAMPP or `php -S localhost:8000`).
2. Fill in your own database details in `part2-php-mysql/settings.php`.

## Notes
- Database credentials in `settings.php` were replaced with placeholders before publishing.
- Commit dates reflect the original file modification dates of the coursework; the repository itself was published on GitHub in November 2026.
