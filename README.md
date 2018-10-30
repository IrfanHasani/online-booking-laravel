# ONLINE BOOKING, Laravel and FullCalendar.io

This is an open-source web application designed to allow users to book an appointment. Users can open an account and create new booking appointments. The platform has role management with the following roles: client, employee and admin.

      * Clients can create their account and make new appointments. 
      * Employees can see their clients, services and working hours. 
      * Admins can see all appointments, clients and employees. Admins can add employees, services, working hours etc.
      
---      

## Technology used

Laravel 5.6, JavaScript, FullCalendar.io, jQuery, Ajax etc.

---
## Instructions

To get this working, you need to install dependencies and set up your .env...
  
  * run `composer install`
  * run `php artisan key:generate`
  * Now add the app key to your .env file, this is also where you define your database (there is an example in root called .env.example)
  * Next, you need to run the database migrations...
  * `php artisan migrate`  Creates the tables in the database
