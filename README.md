# online_store_hhpty
This is an online shop application that allows user to purchase 1 item at a time, it also offers discount on higher prices

This app was coded in PHP Laravel 5.4 frame work

A user needs to register for them to be able to make purchases
After logging in, the user will have access to the following:

Make purchases
View transactions
Top up account

Technical Details:

Laravel 5.4
Bootstrap 3.3
MySql/MariaDB

Database connection file are as follows and can be found in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=online_shop
DB_USERNAME=root
DB_PASSWORD=


I have also included the mysql dump, all you need to do is create a dababase called "online_shop" and dump the SQL in your mysql client/phpmyadmin

To Deploy this app, you need to install composer

You will to create a new laravel project using the following command on your terminal:

composer create-porject laravel/laravel online_shop then copy all the code in this repo

