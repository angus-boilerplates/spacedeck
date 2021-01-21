# Spacedeck PHP Boilerplate 🛸

Spacedeck is a complete PHP boilerplate for creating modern websites, it includes support for multiple CSS frameworks and also allows you to access private server files easily with built in functions. Spacedecks features...

#### Global Variables
The a_config.php file can be customised to control each of these variables on page load...
- Current Page
- Navigation page
- Canonical Tags
- Page Title
- Page Description

#### Assets
What is contained inside the "Assets" folder
- Customisable SASS file
- Javascript files for controling navbar etc
- Precompiled CSS file
- Images folder

#### Views
The Views folder contains the actual content to display on your site, it is split into two folders currently, 'util' and 'public', util contains common views such as error404 documents etc, whereas public contains all the views for the public side of your site. The views folder can be configured to work with your site and files in there can be accessed using the functions in global-functions.php


#### Includes
The includes folder contains, key bits of code such as configuration files, navigation bars etc, that belong on every page of your site. Inside the public folder in includes you will find...
- a_config.php - control global variables etc
- footer.php - a footer to display on every page of your website
- footer-scripts.php - scripts to execute at the bottom of the page
- navbar.php - Navigation bar to display accross your whole website
- head-tags.php - All the head tags to display on most pages
- static.php - All the head tags to display on EVERY page


### Htaccess file
The htaccess file is setup to redirect all urls to /index.php which is setup to be the controller, all 404 and 403 errors will go through index.php where they will be processed accordingly. htaccess also removes php extensions from the URLS and trims trailing slashes.

### Core Folder
The core folder contains functions used by the whole site, it is also split into sub folders such as 'public' to make it easier to manage multiple subdomains. The global-functions.php file contains functions for accessing file paths for the site.

## Getting Started

Ensure you have either a web server with PHP installed, or a working LAMP stack such as XAMPP. Place the contents of this repository in your "HTDOCS" folder or setup an appropriate virtual host and place the contents of this repository wherever you choose. Ensure if you are using a vhost that it points to the "public_html" folder. Restart Apache and open index.php to view the home page.

### Prerequisites

What you will need...

- Web Server or LAMP Stack (XAMPP)
- PHP installed


### Installing

How to download and setup the template

Navigate to your "HTDOCS" folder on your web server and clear the contents, clone this repository, (note the . at the end ensures the enclosing folder is not cloned)

```
git clone https://github.com/angusgoody/spacedeck .
```

## Authors

* **Angus Goody** - *Initial work* - https://github.com/angusgoody
