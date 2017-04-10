# STRUCTURE

## Framework

### SLIM v2 (required)

The architecture of the project is based on Slim, a PHP micro-framework.

More info here
http://docs.slimframework.com/

**!!!!IMPORTANT!!!!**

Use Composer to install the project.

### Mobile Detection (required)

This library is used to check the device that run the app.
It helps to build a specific layout for mobile. Different from desktop and tablet.

## Directory

You will find 6 folders and 7 files on the root of the project.

- **app/**
- **assets/**
- **data/**
- **gulp/**
- **resources/**
- **views/**
- .gitignore
- .htaccess
- composer.json
- contributors.txt
- gulpfile.js
- index.php
- package.json

### APP/ folder

Worked with index.php file. This is the place where all the project is managed.

First you have the routes.php file that manage all the URLs of the website.

Then all the layout is managed with ViewController.php in Controller folder.

Finally, the page is created with PageController.php. Each page are created here by creating an instance of ViewController.

### VIEWS/ folder

This is where you can find all the HTML code that create the view.
- Desktop and Mobile create the main global view
- Modules contains some common modules that are used in the website
- Pages are the main container for each view. This is where you create the specific content for each page or call some modules
- Partials contains some basics common sourcecodes (header/footer/main navigation/etc...)

### CSS/SASS/JS/LIBS/
All the sources are inside the **resources* folder.

- The *css* folder is just some basic reset/utils files.
- The main CSS of the projects is inside *precss* folder. SASS is used here. The main file is **src/precss/builder.scss**. It imports all the others files. The gulp task used to create the CSS is **gulp sass** and **gulp sassMobile**.
- All the JS are inside *js* folder. Some of external librairies (not maintained) are inside *lib*. The task to concatenate and minify are **gulp javascript** and **gulp minify**. To add a file inside the projects, you need to add it inside the gulp configuration. Go to **gulp/config.js** and simply add it in the *javascript.src* node.

*Most of the JS are directly coming from NPM. I import them using the npm install command line. For some of them that don't exist on node, i use napa import directly from their github repo*

**Check the package.json**

### ASSETS FOLDER
All the files used by the websites are here.

You will find the gulp-created files inside the build folder.

Then, all the images, fonts and svgs are also there.

**IMPORTANT**

Generally, most of the images used in the html code comes from my own Dropbox Public folder.

# INSTALLATION

To setup the project, do this

```sh
composer install
npm install
gulp start
gulp build
```

To be sure you have all the required files, run *npm install* twice

### Requirements

Please find my node/terminal settings used for the project

- Sass 3.4.18
- Gulp CLIP v3.8.7 and Local 3.9.1
- Node 4.0.0
- Npm 2.14.2
-
### Librairies

Please check the **package.json** file to see the several tasks used in the project (watcher CSS/JS, Autoprefixer, Livereload, SVG cleaner, Sprite Maker)

# PROJECTS DATAS (required)

You will find a *data* folder in the root of the project.
Where you will find a json that contains all the content to manage the projects grid.
