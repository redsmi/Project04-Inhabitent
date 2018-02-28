# Inhabitent

Inhabitent is a multi-page website for a fictional camping supply company, Inhabitent Camping Supply Co., which includes a journal/blog section.<br />
It uses WordPress as a content management system.

## Pages include:
A custom static homepage, About page, Contact page (with a contact form).<br />
A blog post index page and a single view for blog posts.<br />
A shop/product archive page, a product type archive page, and single template for products.<br />
A search results page for a functioning search form, and results pages for dates, categories, tags.<br />
A 404 page.

## Technologies used:
MAMP – To install a local server environment in order to install and use WordPress.<br />
Node modules and Gulp – For running build tasks such as browser sync, code error checking, converting SASS to CSS, code minification.<br />
HTML, SASS/CSS – Structure and style website<br />
Javascript – To add a toggle-able search form to the site header where the search input is automatically focused when the form is toggled open<br />
Transfonter – generate TT, OTF, WOFF, WOFF2 , and SVG font faces.<br />
PHP – The language of WordPress. PHP built-in functions, variables, arrays, loops, including, to create page templates, following the Wordpress Template Heiarchy. PHP files generate the site on the server (with the help of the Apache web server) so it can be rendered as HTML in the browser. Used to get data out the database and populate the website with it. Used along with Wordpress built-in functions to retrieve and output desired data. Hooks, Actions, Filters.

### WordPress back-end/dashboard: 
Select/utilize the desired custom theme directory<br />
Enter Journal posts with Dates, Categories, and Tags<br />
Enter content for Inhabitent “About” and “Find Us” pages<br />
Structure the Menu and links that will be fixed at the top of each page<br />
Structure the Sidebar Widget.<br />
Change the homepage from displaying latest entries to a static page.

### WordPress plugins (installed from the WordPress Plugin Directory):
Contact Form 7 –  Allows simple insertion of a contact form<br />
Custom Field Suite – Add custom fields to WordPress edit pages.<br />
On the “About” page: Image for hero banner, WISIWYG editors for description.<br />
On “Products”: Text field for price of each product<br />
Show Current Template –Show the current template file name in the tool bar which is a q.o.l assistance for the developer.

### WordPress plugins (custom created)
Business Hours Widget – Additional widget to add to the Sidebar, editable from dashboard<br />
Inhabitent Functionality – contains all of the core functionality for this website so that it remains theme–independent.

https://generatewp.com/post-type/ - Tool to create custom code for Post Types with register_post_type() function.<br />
https://generatewp.com/taxonomy/ - Tool to create custom code for Taxonomies with register_taxonomy() function.
