# Food Delivery Backend Project

## Description

This project is a food delivery application. It is designed to connect customers with local restaurants and facilitate the ordering and delivery of food. The backend of this application is built with Laravel.

### Installation

1. Clone the repository:

-   git clone https://github.com/mendim-bellaqa/food-delivery-backend.

2. Navigate to the project directory:
   `   cd food-delivery-backend`

3. Install dependencies:

    ```
    composer install
    ```

4. Copy `.env.example` to `.env` and modify the database configuration options as necessary.

5. Generate an application key:
    ```
    php artisan key:generate
    ```
6. Run the database migrations and seeders:
    ```
    php artisan migrate --seed
    ```

## Usage

To start the application, use the command:

````
 php artisan serve
 ```

Then, navigate to `http://localhost:8000` in your web browser.

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.
````
