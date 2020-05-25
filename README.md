# CrimeInfoHut


Description :
  It is a simple website that manages online crime management system for my Software Engineering Project.
  Server Site Scripting done using PHP.
  For Database I used MYSQL.
  For Front-End I used HTML,CSS,JAVASCRIPT.
  

Steps to run the Program : 

  To run this project, you must have a virtual server ,i.e. XAMPP(for Windows),LAMP(for Ubuntu).You have to start Apache and MYSQl server in XAMPP .

  For windows, you can take help from this link "https://make.wordpress.org/core/handbook/tutorials/installing-a-local-server/xampp/".

  For ubuntu , you can take help from this link "https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04".
  You can choose your own version of ubuntu in that link.

  I have made my project in Ubuntu 16.04 using Visual Studio Code.If anyone faces any difficulty in running this project, they can ping me.

  1. Extract the file .
  2. Copy the main project folder.
  3. Paste in xampp/htdocs (for windows)/ in var/www/html (for ubuntu 16.04).
  4. Open a browser and go to URL “http://localhost/phpmyadmin/”.
  5. Then click on the Databases tab.
  6. Create a database naming “cms” and then click on the import tab.(If you wish to change the name of the database then you have to change the name in CMS.php inside the Connections folder.)
  7. Click on browse file and select “cms.sql” file which is inside the “crime_infohut” folder.
  8. Click on go.

  After creating database.

  9. Open a browser and go to URL “http://localhost/crime_infohut/”.

Special Precautions ::
  Here, I am assuming your MySQL account username is root as I was using the root account and the password is NULL ,i.e. "".However, if you have some different username or password or both then you can change the same in CMS.php which is present inside the Connections folder.

Thanks A Lot.

Made by Bikash Sahoo
