# php-mvc-structure

A lightweight MVC structure built from scratch in pure PHP.
This project is a learning-oriented implementation of the Model–View–Controller architecture without using any external frameworks.

✅ XAMPP-only Setup (No Windows Editing Required)

Below are the required steps to make your MVC project work correctly on XAMPP without modifying Windows hosts file and without creating Virtual Hosts.

📘 1. Project Folder Placement
  Place your MVC project inside: C:\xampp\htdocs\mvc
  The structure should look like:
  htdocs/
   └── mvc/
      ├── public/
      │     ├── index.php
      │     └── .htaccess
      ├── src/
      ├── vendor/
      └── composer.json
      
📘 2. Enable mod_rewrite in Apache
  Apache must have URL rewriting enabled.
  Open file:  C:\xampp\apache\conf\httpd.conf
  Find the line:  #LoadModule rewrite_module modules/mod_rewrite.so
  Remove the # → to enable it:
  LoadModule rewrite_module modules/mod_rewrite.so
  Save & restart Apache.

📘 3. Apache must allow .htaccess overrides
  In the same file:  C:\xampp\apache\conf\httpd.conf
  Search for:  <Directory "C:/xampp/htdocs">
  Make sure:  AllowOverride All
  instead of AllowOverride None
  This allows your .htaccess to work.

📘 4. Restart Apache
  Inside XAMPP → Stop Apache → Start Apache
( Required after every config change)

📌 Final Result
Now the project will work successfully at:
http://localhost/mvc/public/post/all
http://localhost/mvc/public/user/all


Routing will work properly because .htaccess handles the URLs.
