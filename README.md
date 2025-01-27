## About TuTracker

A web application built with Laravel (backend) and Vue.js (frontend) to manage transport units.
Users can:

- Add new transport units (trailers or trucks).
- View transport units in separate tabs.
- Search transport units by name.


## Features
- Dynamic Filtering: View trailers or trucks in separate tabs.
- CRUD Operations:
    - Create new transport units with a name and type.
- Search Functionality: Quickly find transport units by name.
- Client-Side Interactions: Built with Vue.js for a seamless user experience.

## Prerequisites

Before running this project, ensure you have the following installed:

- PHP (Version 8.1 or higher)
- Composer (Dependency manager for PHP)
- Node.js (Version 14 or higher, for compiling frontend assets)
- NPM or Yarn (Comes with Node.js)
- MySQL (Or any supported database of your choice)
- Git (For version control)

## Installation Guide

### 1. Clone the repository
- 'git clone' to your desired folder

### 2. Install PHP Dependencies
- run 'composer install' in terminal of project root folder

### 3. Install Javascript Dependencies
- run 'npm install' in the terminal

### 4. Setup the Environment File
- run the command 'cp .env.example .env' in the terminal
- then update the newly created .env file with your database credentials

### 5. Run Database Migrations
- run 'php artisan migrate' in the terminal
- <optional> seed the database with some randomly generated transport units 
- run 'php artisan db:seed --class=TransportUnitsSeeder' in the terminal

### 6. Serve the Laravel Backend
Start the Laravel development server:
- run 'php artisan serve'

### 7. Compile Frontend Assets
Compile the Vue.js frontend
- run 'npm run dev'


## File Structure

Key files and directories for the application:
- routes/api.php: Defines the API routes for managing transport units.
- app/Http/Controllers/TransportUnitController.php: Handles backend logic for transport units.
- resources/js/components/xxx.vue: Vue.js component for managing transport units.
- resources/views/welcome.blade.php: Blade template serving the Vue.js frontend.
- database/migrations/: Database migration files for creating tables.
- app/Models/TransportUnit.php: Eloquent model representing a transport unit.


## Usage

### Adding Transport Units
- 1. Fill out the name and choose a type in the form
- 2. Click the "Create Transport Unit" button to create a new transport unit

### Viewing Transport Units
- Use the Trucks and Trailers tabs to filter transport units

### Searching Transport Units
- Use the search bar to filter transport units by name
