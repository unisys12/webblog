## Personal Blog
This is a personal blog project sorta thing. It is being hosted on a free tier of Redhats PaaS OpenShift.

## Project Layout
Currently, the layout of the project goes like this...

* .openshift - Holds all Openshift related files that get the services DIY cartridge up and running. These files are a fork of another Repo by [Warnar Boekkooi][1]
             - action-hooks - Contains Bash files, which installs PHP v5.5.8, NGINX 1.5.8 and a whole host of other requirements. These files are run each             time the server is rebooted. This allows for adjustments to Nginx or PHP-FPM configs.
                 - Build - The build.sh file contains all the version info for each of the libraries, modules and packages that are used thorughout the project. So if I wanted to update the PHP version to say, 5.6 or whatever, I just change this value in the build file. Upon rebooting the cartridge, the new version will be downloaded and compiled.
            - tmpl - Contains either templates of files that will be copied into place at some point during the build process or config files that will be injected into existing configuration files for either PHP or Nginx.
diy - Default directory installed when you create a DIY cart on Openshfit. Not used for anything in this project, but I suspect needs to remain intact.
- web - Contains the actually project. This is where the framework lives, as well as all project dependicies. Admittedly a bit of a mess at this point, so on my to do list after the project is up and running smoothly.


[1]: https://github.com/boekkooi/openshift-diy-nginx-php
