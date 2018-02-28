# Inhabitent

Inhabitent is a multi-page website for a fictional camping supply company, Inhabitent Camping Supply Co., which includes a journal/blog section.
It uses WordPress as a content management system.

## Pages include:
A custom static homepage, About page, Contact page (with a contact form).
A blog post index page and a single view for blog posts.
A shop/product archive page, a product type archive page, and single template for products.
A search results page for a functioning search form, and results pages for dates, categories, tags.
A 404 page.

## Technologies used:
MAMP – To install a local server environment in order to install and use WordPress.
Node modules and Gulp – For running build tasks such as browser sync, code error checking, converting SASS to CSS, code minification.
HTML, SASS/CSS – Structure and style website
Javascript – To add a toggle-able search form to the site header where the search input is automatically focused when the form is toggled open
Transfonter – generate TT, OTF, WOFF, WOFF2 , and SVG font faces.
PHP – The language of WordPress. PHP built-in functions, variables, arrays, loops, including, to create page templates, following the Wordpress Template Heiarchy. PHP files generate the site on the server (with the help of the Apache web server) so it can be rendered as HTML in the browser. Used to get data out the database and populate the website with it. Used along with 
Wordpress built-in functions to retrieve and output desired data. Hooks, Actions, Filters.

### WordPress back-end/dashboard: 
Select/utilize the desired custom theme directory
Enter Journal posts with Dates, Categories, and Tags
Enter content for Inhabitent “About” and “Find Us” pages
Structure the Menu and links that will be fixed at the top of each page
Structure the Sidebar Widget.
Change the homepage from displaying latest entries to a static page.

### WordPress plugins (installed from the WordPress Plugin Directory):
Contact Form 7 –  Allows simple insertion of a contact form
Custom Field Suite – Add custom fields to WordPress edit pages.
	On the “About” page: Image for hero banner, WISIWYG editors for description
	On “Products”: Text field for price of each product
Show Current Template –Show the current template file name in the tool bar which is a q.o.l assistance for the developer.

### WordPress plugins (custom created)
Business Hours Widget – Additional widget to add to the Sidebar, editable from dashboard
Inhabitent Functionality – contains all of the core functionality for this website so that it remains theme–independent.

https://generatewp.com/post-type/ - Tool to create custom code for Post Types with register_post_type() function.
https://generatewp.com/taxonomy/ - Tool to create custom code for Taxonomies with register_taxonomy() function.
