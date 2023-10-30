# Configurations

1. Download the project files in .zip format
2. Extract the file inside htdocs if you're using Windows, and var/www/html for Linux
3. Navigate into the public directory from your terminal by using the command : cd public
4. Start your local server: php -S localhost:8080. You may listen from any port number of your choice
5. Create a database in localhost/phpmyadmin. I've included an SQL schema in the root directory. Feel free to copy the table layout.
6. Configure your database credentials in app/config/Config.php
7. You may now execute production mode from your browser: localhost:8080. If you are listening from a different port number, you must change the port number to your own
8. I've included a .htaccess file in the public directory. Should you need to check for bugs, feel free to turn on the display error configuration
