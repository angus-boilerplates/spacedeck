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

#### Includes
What is contained inside the "Includes" folder
- a_config.php - control global variables etc
- footer.php - a footer to display on every page of your website
- footer-scripts.php - scripts to execute at the bottom of the page
- forbidden403.php - page to display for a 403 error
- forbidden404.php - page to display for a 404 error
- navbar.php - Navigation bar to display accross your whole website
- head-tags.php - All the head tags to display on most pages
- static.php - All the head tags to display on EVERY page


### Htaccess file
The template comes with a .htaccess file that will automatically hide the .php extension from the URL, it will also redirect 404 and 403 errors to the following files...
- invalid404.php: The page could not be found
- forbidden403: You do not have permission to access this page

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
