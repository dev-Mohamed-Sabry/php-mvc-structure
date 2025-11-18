php-mvc-structure

A lightweight MVC structure built from scratch in pure PHP. This project is a learning-oriented implementation of the Model–View–Controller architecture without using any external frameworks.

✅ XAMPP-only Setup (No Windows Editing Required)
Below are the required steps to make your MVC project work correctly on XAMPP without modifying Windows hosts file and without creating Virtual Hosts.

📘 1. Project Folder Placement
Place your MVC project inside:
C:\xampp\htdocs\mvc

The structure should look like:
htdocs/
└── mvc/
├── public/
│ ├── index.php
│ └── .htaccess
├── src/
├── vendor/
└── composer.json

📘 2. Enable mod_rewrite in Apache
Apache must have URL rewriting enabled.
Open file:
C:\xampp\apache\conf\httpd.conf

Find the following line:
#LoadModule rewrite_module modules/mod_rewrite.so

Enable it by removing the # :
LoadModule rewrite_module modules/mod_rewrite.so

Save the file and restart Apache.

📘 3. Apache must allow .htaccess overrides
In the same file:
C:\xampp\apache\conf\httpd.conf

Search for:
<Directory "C:/xampp/htdocs">

Ensure the directory block contains:
AllowOverride All
instead of:
AllowOverride None

This allows your .htaccess rules to work properly.

📘 4. Restart Apache
Inside the XAMPP Control Panel:

Stop Apache

Start Apache again

(Required after every configuration change)

📌 Final Result
Your project will now work successfully at:
http://localhost/mvc/public/post/all

http://localhost/mvc/public/user/all

Routing will work correctly because .htaccess captures and rewrites all incoming URLs to index.php.
