# Laravel Cars Exercise

This is a short exercise to Test MVC knowledge and how to use laravel

## dependencies

Laravel version 8.0.0 is used
plus the other dependencies:

1. pelmered/fake-car for testing
2. sass
3. bootstrap css framework

## how to use for local testing

once cloned:
1. run `composer install` on the project directory
2. run `yarn` if you have yarn otherwise install yarn. This will install all the Node/Npm dependencies.
3. rename the .env.example to .env.
4. edit the .env file to point to your sqlite database file
5. run `php artisan key:generate`. This will put a key in .env file which you may be used for session and security purposes.
6. run `php artisan migrate` once the sqlite database has been setup
7. run `yarn dev` to compile resource and assets files
8. run `php artisan serve`
9. The application will be served from '/' of the localhost or your chosen host

## deployment instruction

For deployment instruction to server please follow this document by laravel:
[laravel deployment docs](https://laravel.com/docs/8.x/deployment)


