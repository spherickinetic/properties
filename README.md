# Laravel Demo

A simple Laravel API demo

## Description

This demo serves as a basic intro into the Laravel framework.

## Requirements

This demo requires PHP 8.1, Composer and MySQL to be installed and running.

## Features

* **Query a dataset via an API** - Allows users to perform basic CRUD operations on a set of fake data.
* **PHPUnit Testing** - A rudimentary test suite proves testing functionality.

## Installation

1. Clone the repository, then enter the directory

   ```bash
   git clone https://github.com/spherickinetic/properties.git
   ```

   ```bash
   cd properties
   ```

2. Install dependencies

   ```bash
   composer install
   ```

3. Migrate the database and choose 'yes' to create the database

   ```bash
   php artisan migrate
   ```

4. Configure your environment

   ```bash
   cp .env.example .env
   ```

Update the .env file with your database name and settings.

5. Seed the database

   ```bash
   php artisan db:seed PropertySeeder
   ```

6. Start the dev server

    ```bash
    php artisan serve
    ```

7. Visit [the site](http://localhost:8000) in your browser.

## Author

[Dan Bolton](https://spherickinetic.co.uk)