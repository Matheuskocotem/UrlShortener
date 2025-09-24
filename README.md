# Laravel URL Shortener

This is a simple URL shortener application built with Laravel 10 and running in a Docker environment.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Setup Instructions

1.  **Clone the Repository**

    ```bash
    git clone <your-repository-url>
    cd ImagemDockerLaravel-vue
    ```

2.  **Environment Configuration**

    Navigate to the `backend` directory and create your environment file by copying the example file.

    ```bash
    cd backend
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials. The default configuration in `docker-compose.yml` is:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=codeacademy_laravel_vue
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

3.  **Build and Start Containers**

    From the root directory of the project (`ImagemDockerLaravel-vue`), build the images and start the services in detached mode.

    ```bash
    docker compose up --build -d
    ```

4.  **Install Composer Dependencies**

    Install the PHP dependencies using the `composer` service.

    ```bash
    docker compose run --rm composer install
    ```

5.  **Generate Application Key**

    Generate a unique application key for your Laravel project.

    ```bash
    docker compose run --rm artisan key:generate
    ```

6.  **Run Database Migrations**

    Create the necessary tables in the database by running the migrations.

    ```bash
    docker compose run --rm artisan migrate
    ```

## Running the Application

Once the setup is complete, the application should be accessible at:

-   **Application**: [http://localhost:8000](http://localhost:8000)
-   **phpMyAdmin**: [http://localhost:8086](http://localhost:8086)

## Available Docker Commands

Here are some useful commands to interact with the application via Docker Compose:

-   **Run Artisan commands**:
    ```bash
    docker compose run --rm artisan <command>
    # Example: docker compose run --rm artisan route:list
    ```

-   **Run Composer commands**:
    ```bash
    docker compose run --rm composer <command>
    # Example: docker compose run --rm composer update
    ```

-   **Stop the containers**:
    ```bash
    docker compose down
    ```
