#Login Page
A login system made entirely out of PHP, CSS and HTML  
I was tired of looking through dozen of pages trying to find a free, fast and easy login service. Enjoy :)
##Features
 - All passwords are encrypted using sha256 with salt and pepper
 - Database configuration easily changed. Found in `config.php`
 - Support for multiple login only pages

##Install
 1. Download the files from the repo
 2. Create a table using the code `CREATE TABLE login(id int(10) NOT NULL AUTO_INCREMENT,username varchar(255) NOT NULL,password varchar(255) NOT NULL,PRIMARY KEY (id))`
 3. Change `home.php` to whatever you want. You can also make other files just by requiring `sessions.php`
 4. Enjoy!
 
##Files
`index.php` - contains the login page  
`home.php` - where the main things live, only accessible by logged in users  
`login.php` - contains the login script and various hashing / escaping functions  
`session.php` - checks the logged in user against the database  
`logout.php` - logouts the user when redirected to this page  
`config.php` - contains config option mainly regarding the database  
`hash.php` - contains the hashing function (salt and pepper are stored here)
`hashes.php` - generates and then echos a hash of a password specified
##TODO
 - `logout.php` nolonger exist and the function is available to all pages
