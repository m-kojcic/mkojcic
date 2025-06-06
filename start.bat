@echo off

echo Starting Laravel setup for existing project...

set project=.

echo Using project directory: %project%

cd %project%

echo Installing PHP dependencies...
call composer install

echo Creating database file (if it doesn't exist)...
if not exist database\database.sqlite (
    copy NUL database\database.sqlite
) else (
    echo database.sqlite already exists, skipping...
)

echo Copying .env.example to .env if .env doesn't exist...
if not exist .env (
    copy .env.example .env
) else (
    echo .env file already exists, skipping...
)

echo Generating application key...
php artisan key:generate

echo Running migrations and seeding...
php artisan migrate:fresh --seed

echo Installing npm dependencies and building assets...
call npm install
call npm run build

echo Starting Laravel server at http://localhost:8000
start cmd /k "php artisan serve"

echo Laravel setup finished.

pause