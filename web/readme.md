## My Personal Blog
This project was/is all about giving myself more experience in front-end and back-end development. It is currently hosted on an free tier over on OpenShift without a domain. The url of the project is blog-unisys12.rhcloud.com.

## Tools Used
The back-end is built with Laravel 4.1 using a simple MySQL database v5.1. Although the standard .htaccess files are still in place, the project is actually using Nginx v1.5.8 and PHP_FPM. The config file can be found in .openshift/tmpl/nginx.conf.tmpl, so you can take a closer look. The version of PHP I am running on the server is 5.5.8.

At this time there is basically no front-end code, as in JavaScript. Everything is done through the back-end. This will change at some point. At that point, I will be using AngularJS. Haven't even started planning for that yet, so... The blog supports Markdown, which is saved to the database, then parsed at time of display. The markdown parser I am using is Parsedown, which is a really nice project!

All styling is done through SASS using a custom Grunt task (of course found in the root of the /web dir) to compile, concat and compress all the partials(which can be found in /web/scss/) into a single style.css file. I am using Normalize.css, but that's it. No css frameworks or grids, other than the custom mixins I created for grid like functions. I am using PrismJS for syntax highlighting, with the line numbers option along with just about all languages supported.

####More to come as I move along with the project
