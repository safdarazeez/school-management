# Copilot Instructions for AI Coding Agents

## Project Overview
- This is a Laravel-based web application for school management, using PHP and following standard Laravel MVC architecture.
- Main components:
  - `app/Http/Controllers/`: Handles HTTP requests and business logic (e.g., `AccademicYearController.php`).
  - `app/Models/`: Eloquent ORM models for database tables (e.g., `AccademicYear.php`, `User.php`).
  - `resources/views/`: Blade templates for UI (e.g., `admin/`, `welcome.blade.php`).
  - `routes/web.php`: Defines web routes and maps them to controllers.
  - `database/migrations/`: Database schema migrations.
  - `database/seeders/`: Database seeders for test/demo data.

## Developer Workflows
- **Run the application locally:**
  - Use `php artisan serve` to start the development server.
  - Database is SQLite by default (`database/database.sqlite`).
- **Run migrations:**
  - `php artisan migrate` applies schema changes.
- **Seed the database:**
  - `php artisan db:seed` populates tables with sample data.
- **Run tests:**
  - `vendor\bin\phpunit` or `php artisan test` (see `tests/` for examples).

## Project-Specific Patterns
- Controller methods follow Laravel conventions: `index`, `store`, `read`, `edit`, `update`, `delete`.
- Views for admin features are under `resources/views/admin/` (e.g., `academic-year-list.blade.php`).
- Data is passed to views using `compact()` in controllers.
- Validation is performed in controller methods using `$request->validate([...])`.
- Flash messages for success/failure are returned using `with('success', ...)` or similar.

## Integration & Dependencies
- Uses standard Laravel packages (see `composer.json`).
- No major custom service boundaries or external APIs detected.
- Follows Laravel's service provider and middleware patterns (see `app/Providers/`, `app/Http/Middleware/`).

## Examples
- To add a new resource (e.g., "Classroom"), create:
  - Model in `app/Models/`
  - Controller in `app/Http/Controllers/`
  - Migration in `database/migrations/`
  - Views in `resources/views/admin/`
  - Routes in `routes/web.php`

## References
- See `README.md` for general Laravel info.
- See `app/Http/Controllers/AccademicYearController.php` for CRUD patterns.
- See `database/migrations/` for schema structure.

---

If you are unsure about a workflow or pattern, prefer Laravel defaults unless a project-specific convention is documented above.
