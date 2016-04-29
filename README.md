splipmango-ex
=============

A Symfony project created on April 29, 2016, 1:22 am.

Install instructions
----------------------------------------------------------------------------------

# From your project root directory
cd /path/to/your/project/root/directory

# Clone git repo 
git clone https://github.com/lyrad/splitmango-ex.git

# Move to project root directory
cd splitmango-ex/

# Update database name/user/password
vi splitmango-ex/app/config/parameters.yml

# Install dependencies
composer install

# Update database structure
php bin/console doctrine:schema:update --force

# insert default fos users
mysql -u <mysql_user> -p<mysql_password> <mysql_db_name> < src/AppBundle/db_data.sql

# Configure web server or use built-in
