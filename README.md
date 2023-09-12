# Laravel Email Sending with Queues and Jobs

This Laravel project demonstrates how to send emails asynchronously using queues and jobs when a form is submitted. This asynchronous approach helps improve the performance and responsiveness of your application by offloading time-consuming tasks like sending emails to a separate worker process.

## Getting Started

Follow the steps below to set up and run this Laravel project on your local development environment.

### Prerequisites

- PHP (>=8.1)
- Composer
- Laravel (>=10.x)
- A configured database ( MySQL)

### Installation

1. Clone the repository:

   ```bash
    git clone https://github.com/mfaizanshaikh1/laravel_vue_form.git
    cd laravel_vue_form


2. Install Composer Dependencies:

   ```bash
   composer install

   
3. Install NPM Dependencies:
     Laravel often requires JavaScript dependencies. Navigate to your project directory and run the following command to install the JavaScript dependencies using npm:

   ```bash
   npm install

4. Create a .env File:

    ```bash
    cp .env.example .env

5. Generate an Application Key:

    ```bash
    php artisan key:generate

6. Run Migrations:

    ```bash
    php artisan migrate

7. Start the Development Server:

    ```bash
    php artisan serve
    npm run dev

8. Run the Queue Worker:

    ```bash
    php artisan queue:work