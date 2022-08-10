# Restaurant Reservation system WEB APP
---
Food-Nation is a DBMS project with both admin and user layouts. 
Food-Nation is a web application developed to provide online restaurant reservation to our customer. Customer can make reservation based on their cuisine they like, the location, the price range, the Date & time etc. Admin of restaurant will communicate with the users through phone call or e-mails. 

> ## Description
---
- Customer can choose to browse and make the table reservation without Log In.
- Customer can choose to register and log in for a better browsing experience. Customer can only view/edit/cancel their booking after they log in.
- Customer can using the filtering function to find out the most suitable restaurant for them.
- Admin can Edit/Delete Restaurant list, Restaurant reservation and Customer message list. (admin default username:**admin**, password: **admin**


> ## Installation
---
1. Download [XAMMP](https://www.apachefriends.org/download.html).
2. Open XAMPP Control panel and start running [apche] and [mysql].  
3. Download and Unzip `Restaurant-Reservation-System-PHP-Mysql`.  
  Or follow gitbash command:  
  ```
  i>cd C:\\xampp\htdocs\   
  ii>git clone https://github.com/Kensiang/Restaurant-Reservation-System-PHP-Mysql.git
  ``` 
4. Extract files in C:\xampp\htdocs.
5. open link `localhost:[your Apache port number]/phpmyadmin` on browser. (You can found your port number on XAMPP control panel). You can use the Admin button of your database module to open phpMyAdmin.   
6. Create 2 database name as:
   - (food_nation) -- Import `food_nation.sql` from the folder downloaded from github to this database.
   - (rbs) --  Import `rbs.sql` from folder downloaded from github to this database. 
7. Open any google chrome browser and type **localhost:[your Apache portNumber]/food_nation/. 
---

> ## Guide
- [XAMPP installtion tutorial](https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/)
- Access `../food_nation.register.php` to register user account.
- Access `../food_nation.login.php` to login user or admin account.
- Acess `../reservationbooking.php` to  make the reservation. 
- Access `../food_nation/user-viewbooking.php` to view your boooking (Must make the reservation first and the reservation name must same as your login username[non-case sensitive])
- Access `../food_nation/index%20admin%20page.php` : Admin HomePage (Must log in admin account first). 
- Admin account details Username=admin, Password:admin. 

> ## Software and programming language used to develop
- HTML
- CSS
- JS
- PHP
- SQL
- XAMPP(Apache,MYSQL,phpmyadmin)

> ## IF YOU LIKE THIS PROJECT:
---
> NO NEED TO BUY ME CUP OF COFFEE, JUST GIVE US FULL MARKS! THANKS ADVANCE. 

