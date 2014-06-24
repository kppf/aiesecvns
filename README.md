CONFIGURATION
=============

### PHP extension required
* gettext
* openssl
* pdo_mysql
* sockets

### Apache modules required
* deflate
* expires
* filter
* include
* mime
* rewrite
* php5

### Hosting
* Make a virtual host to run the project (recommended) - root of the project should be the directory root of the virtual host

### Copy `settings.php.sample` to `settings.php`
* Configure database constants
* Configure other constants if required (if you're not running on virtual host)

### Copy `.htaccess.sample` to `.htaccess`
* CASE Apache server (WAMP/LAMP)
 - Uncomment `php_value auto_prepend_file` line and put the absolute path to settings.php there
* CASE CGI (Godaddy)
 - Copy `.user.ini.sample` to `.user.ini` and put the absolute path to settings.php there
