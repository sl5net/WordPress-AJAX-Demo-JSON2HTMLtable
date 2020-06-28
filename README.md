# WordPress-AJAX-Demo-JSON2HTMLtable
Simple AJAX-Demo for WordPress with simple QUnit tests

## requirements for using this plugin
* WordPress. recommended Version WordPress 5.x 
tested in Version WordPress 5.4.2

## Install using ZIP file:
1. you can get a ZIP file from GitHub. click on the green Clone or Download button.
1. Log into your WordPress backend, on the left menu, 
click Plugins -> Add New, then click the button "Upload Plugin" 
1. activate it.
1. visit your wordpress site (no need for log in). for e.g. http://localhost:8080/wordpress/

## Install by using composer:

1. Download or checkout repository into your Plugin-Folder.
(2. Not necessary in Version 0.1 :
   Run `composer install` in `plugins/WordPress-AJAX-Demo-JSON2HTMLtable/`. )
1. Activate Plugin.


## Effect you will see:
it is replacing **your content** ($content = ' ...) with **demo content** from https://jsonplaceholder.typicode.com/users
Two HTML tables and Unit-Test-View-Table. all together 3-Tables. 
The Content Tables: The Details-Table (first visit empty) and the Overview-Table.
1. Unit-Test (not really important test. just for demonstration. )
1. Details-Table (little info of last clicked user)
1. Overview-Table (lists all users)

### security risks
security risks are low. because
some sources are direkt from onlne trusted sites:
1. https://jsonplaceholder.typicode.com/users ( http://jsonplaceholder.typicode.com/posts?userId=${user.id} )
1. http://github.com/jquery/qunit/raw/master/qunit/qunit.js ( http://github.com/jquery/qunit/raw/master/qunit/qunit.css )

##### some used technics:
* AJAX (asynchronous fetching. without reloading page)
* jQuery (WordPress does use a recent version of jQuery)
* 3rd party libraries:
  * qunit
  
##### problems:
* i not yet read the inpsyde coding style guide: https://github.com/inpsyde/php-coding-standards
* Qunit is probably not suitable for Ajax tests within WordPress
* There are only a few functions now, but it already looks a bit like spaghetti :-O

##### TODO:
Download QUnit ;) and oter files not use the online javascript.
Okay for demo it works. 
  
##### BTW:
I wrote this Plugin this weekend (28.6.2020). this is just my second wordpress plugin I wrote.

this README files using Markdown syntax https://guides.github.com/features/mastering-markdown/#syntax
