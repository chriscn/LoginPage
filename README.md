#Login Page
A login system made entirely out of PHP, CSS and HTML
##Features
 - All passwords are encrypted using sha256 with salt and pepper
 - Database configuration easily changed. Found in `config.php`
 - Support for multiple login only pages

##Install
 1. Download the files from the repo
 2. Create a table using the code in the `DATABASECODE` file
 3. Change `home.php` to whatever you want. You can also make other files just by including `sessions.php`
 4. Enjoy!
 
##Files
`index.php` - contains the login page  
`home.php` - where the main things live, only accessible by logged in users  
`login.php` - contains the login script and various hashing / escaping functions  
`session.php` - checks the logged in user against the database  
`logout.php` - logouts the user when redirected to this page  
`config.php` - contains config option mainly regarding the database  
`hash.php` - contains the hashing function (salt and pepper are stored here)
##TODO
 - `logout.php` does not exist and the function is available to all pages
