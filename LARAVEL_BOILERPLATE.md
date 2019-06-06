# Laravel-boilerplate 5.8

## Instructions

### 1. Install a fresh Laravel

### 2. Clone the boilarplate

Clone the boilarplate in differnet folder. Copy and paste them inside the laravel project folder.

Copy resources folder (except error folder)
Copy public folder
Copy burger icon folder
* Did not copied the scss file

### 3. Prefixed files

Follow the `-` prefixed files.
* .env add content
* webpack.mix.js add content
* edit pending (public/ htaccess/ feed/ sitemap)
* edit public/human

### 4. Edit/Delete these files

+ CONTRIBUTION_GUIDE.md
+ DEV_ENV_SETUP.md
+ ESSENTIAL_COMMANDS.md
+ LARAVEL_BOILERPLATE.md

### 5. Preparing the Laravel

```bash
composer install
php artisan key:generate
cp .env.example .env
```

### 6. Installing the packages

```bash
// Optional pre-installed
npm install --global cross-env
npm install -g browser-sync
// npm install --global yarn

npm install
```

### 6. Installing the Susy and Skull CSS framework

```bash
npm install --save-dev susy
```

Download the zip file from [GitHub](https://github.com/bdjunayed/skull-css). Copy the contents of the “sass” folder and paste into your project's "scss" folder.

Import the skull-css inside your app.scss file `@import 'styles';`.

### 7. MySQL Database

`mysql -u root`
`create database foo;`
`quit`

### 8. Update the .env

### 9. Migrate the db

```bash
php artisan migrate

// Or
php artisan migrate --seed

// Or
php artisan migrate:fresh --seed
```

### 10. Install Auth

``` bash
php artisan make:auth
```

### 11. Runing the Laravel

``` bash
php artisan serve
npm run dev

npm run watch
npm run production
```

### 12. (If needed) [File permissions](https://laracasts.com/discuss/channels/general-discussion/), on production server

```bash
chgrp -R www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache
```

## Contribution

Please feel free to contribute.

## License

[microtechna.com](http:/microtechna.com)
[@bdjunayed](https://twitter.com/bdjunayed)

## Features

+ Meta
+ favicon
+ 404 & 503 blade
+ HTML5 boilarplate intregated and customized
+ Html components, Typo, variables & svg
+ Javascripts form validation components
+ Susy
+ .env
+ .webpack
+ Contribution, Deployment, Environment, Commands