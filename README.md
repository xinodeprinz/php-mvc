# PHP MVC App

This is a lightweight PHP MVC framework built from scratch, designed to help you quickly build web applications following the Model-View-Controller (MVC) architecture. The framework supports dynamic routing, database interaction with MySQL, and uses environment variables to manage sensitive configuration details.

## Features

- Lightweight custom MVC structure
- Dynamic routing (supports GET and POST routes)
- Environment variable support via `.env` file
- Database interaction (MySQL)
- Simple session flashing for error and success messages
- Composer autoload for organizing classes and files

## How to Run the Project

Follow these steps to set up and run the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/xinodeprinz/php-mvc.git
cd php-mvc
```

### 2. Install Dependencies

Since we're using Composer for autoloading classes, you need to generate the autoloader:

```bash
composer dump-autoload
```

### 3. Configure Environment Variables

Rename the `.env.example` file to `.env`, and then set up your database credentials and other configuration values.

```bash
DB_HOST=localhost
DB_NAME=your_database_name
DB_USER=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Start the Application

Run the following command to start a local PHP server:

```bash
cd public
php -S localhost:2500
```

Now, you can visit the app in your browser at `http://localhost:2500`.

## Folder Structure

```
/app
    /Controllers
    /Models
    /Views
/core
    /Database
    /Router.php
    /Env.php
/public
    /index.php
/.env
composer.json
```

## Contribution

Feel free to fork this repository, create issues, or submit pull requests. Contributions and improvements are highly welcome!
