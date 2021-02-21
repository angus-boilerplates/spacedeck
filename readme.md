# Spacedeck PHP Boilerplate 🛸

Spacedeck is a modern PHP boilerplate, that is based on the MVC framework. It comes preinstalled with Bulma for front end css, JQUERY cdn and font awsome icons. Spacdeck comes with various classes and functions to help you get started on your next PHP project

#### Assets
What is contained inside the "Assets" folder
- Customisable SASS file
- Javascript files for controling navbar etc
- Precompiled CSS file
- Images folder

#### App Folder
The App folder is where the majority of the MVC content will be, it contains four main folders...
 - Config : contains files for configuring your website, such as database passwords etc
 - Controllers: This is where your web controllers we be kept, handling request logic and rending the correct views
 - Models : These are the files that will interact with your database and provide your site with data
 - Views: This is where your PHP files are rendered and then served on the web

#### Core Folder
The core folder is where the core files of the sites fit. The parent classes for all controller, models and views. These are stored in a sub folder named "Base", The "Pages" folder helps seperate different databases in your site. For example you may have a public and private database and inheriting from the base model view will help seperate your code


### Public_HTML
The webroot of the site. Includes an assets folder, htaccess file.


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
* **Dave Hollingworth"" - *MVC framework* - https://github.com/daveh
