# Factory Admin Panel

## Description

The Factory Admin Panel is a Laravel-based web application designed to manage factories and employees. This application allows an administrator to perform CRUD operations on factories and employees, with employees being assignable to specific factories.

## Features

-   **Administrator Authentication**: Basic Laravel authentication to allow administrators to log in.
-   **CRUD Operations**:
    -   **Factories**: Create, Read, Update, and Delete factory records.
    -   **Employees**: Create, Read, Update, and Delete employee records. Employees can be assigned to specific factories.
-   **Database Migrations**: Automated setup of database schema for factories and employees.
-   **Pagination**: Displays a paginated list of factories and employees (10 entries per page).
-   **Activity Tracking**: Logs changes in factories and employees, including old and new values, and user ID.

## Setup

### Prerequisites

-   PHP >= 7.4
-   Composer
-   MySQL or compatible database
-   Laravel 8.x or higher
-   Node.js and npm

### Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/nexuslifeline/factory-admin-panel.git
    cd factory-admin-panel
    ```

2. **Install PHP Dependencies**

    ```bash
    composer install
    ```

3. **Set Up Environment**

    Copy the .env.example file to .env and configure your database connection:

    ```bash
    cp .env.example .env
    ```

    Open the .env file and set the database connection settings:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

4. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5. **Generate Application Key**

    ```bash
    php artisan migrate --seed
    ```

6. **Install JavaScript Dependencies**

    ```bash
    npm install
    ```

7. **Compile Assets**

    For development, run

    ```bash
    npm run dev
    ```

    For production, run:

    ```bash
    npm run build
    ```

8. **Start the Development Server**

    ```bash
    php artisan serve
    ```

## Usage

-   **Log in as Administrator**: Use the following credentials to log in:

    -   **Email**: `admin@admin.com`
    -   **Password**: `password`

-   **Manage Factories**:

    -   Access the factories management section to perform CRUD operations:
        -   **Create**: Add new factories by providing the required information.
        -   **Read**: View details of existing factories.
        -   **Update**: Modify the details of existing factories.
        -   **Delete**: Remove factories from the system.

-   **Manage Employees**:
    -   Access the employees management section to perform CRUD operations:
        -   **Create**: Add new employees and assign them to factories.
        -   **Read**: View details of existing employees.
        -   **Update**: Modify the details of existing employees.
        -   **Delete**: Remove employees from the system.
-   **View Activity Logs**:
    -   Monitor changes to factories and employees by checking the `laravel.log` file.
    -   Logs include:
        -   **Model Name**: The name of the model (e.g., Factories or Employees).
        -   **Record ID**: The ID of the affected record.
        -   **Changes**: The old and new values for updated records.
        -   **User ID**: The ID of the user who made the changes.
