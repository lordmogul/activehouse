# Activehouse

# Packages
1. PHP
2. Laravel
3. Passport

# How to use
1. Clone the repo
2. Change directory to the cloned repo
   ```dotnetcli
   git clone https://github.com/lordmogul/activehouse.git
   ```
3. install required packages via composer
   ```dotnetcli
   composer install
   ```
4. Create environment variable 
   ```dotnetcli
   .env
   ```
5. Run migration
   ```dotnetcli
   php artisan migrate
   ```
6. Install Passport via the Composer package manager
   ```dotnetcli
   composer require laravel/passport
   ```
7. Run migration again 
   ```dotnetcli
   php artisan migrate
   ```
8. Install passport 
   ```dotnetcli
   php artisan passport:install
   ```
9.  Start the application
    ```javascript
    php artisan serve
    ```