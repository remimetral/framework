# Custom Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)

### Prerequisites

* [Composer](https://getcomposer.org/download/)
* [Node.js](https://nodejs.org/en/download/)
* [Vagrant](https://www.vagrantup.com/downloads.html)
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)

### Quick Start

* Clone the project `git clone git@github.com:remimetral/laravel.git`
* Run `composer install` to launch your environment
* Run `npm install` to set up the dependencies
* Next, run `vagrant up` and access your project at http://homestead.test

> Note: Remember, you will still need to add an `/etc/hosts` file entry for `homestead.test` or the domain of your choice. You can change the server alias or domain name in `Homestead.yaml` file, don't forget also to update your BrowserSync proxy in `webpack.mix.js` file.

### Module Bundler

Webpack is used through Laravel Mix for defining basic build steps for your application.
`webpack.mix.js` is your configuration layer on top of Webpack. Most of your time will be spent here.

Head over to your `webpack.mix.js` file :

```js
let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .browserSync('homestead.test');
```

Now, from the command line, you may run `npm run watch` to watch your files for changes, then recompile and reload your browser.

> Note: You won't find a `webpack.config.js` file in your project root. By default, Laravel defers to the config file from this repo. However, should you need to configure it, you may copy the file to your project root, and then update your `package.json` NPM scripts accordingly: `cp -r node_modules/laravel-mix/setup/webpack.config.js ./`.
