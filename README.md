Laravel package generator
=========================

[![GitHub Workflow Status]()]()
[![styleci]()]()

[![Packagist]()]()
[![Packagist]()]()
[![Packagist]()]()

Simple package to quickly generate basic structure for other laravel packages.

## Install

Install via composer
```bash
composer require --dev spinzar/laravel-package-generator
```

Publish package config if you want customize default values
```bash
php artisan vendor:publish --provider="Spinzar\LaravelPackageGenerator\ServiceProvider" --tag="config"
```

## Available commands

### php artisan package:new -i {vendor} {package}

Create new package.

Example: `php artisan package:new Spinzar SomeAwesomePackage`

This command will:

* Create `packages/spinzar/some-awesome-package` folder
* Register package in app composer.json
* Copy package skeleton from skeleton folder to created folder (you can provide
your custom skeleton path in config)
* Run `git init packages/spinzar/some-awesome-package`
* Run `composer update spinzar/some-awesome-package`
* Run `composer dump-autoload`

With interactive `-i` flag you will be prompted for every needed value from you.

### php artisan package:remove {vendor} {package}

Remove the existing package.

Example: `php artisan package:remove Spinzar BalanceSheet`

This command will:

* Run `composer remove spinzar/balance-sheet`
* Remove `packages/spinzar/balance-sheet` folder
* Unregister package in app composer.json
* Run `composer dump-autoload`

Interactive mode also possible.

## Custom skeleton

This package will copy all folders and files from specified skeleton path to
package folder. You can use templates in your skeleton. All files with `tpl`
extension will be provided with some variables available to use in them. `tpl`
extension will be stripped.

Available variables to use in templates:

* vendor (e.g. Spinzar)
* package (e.g. SomeAwesomePackage)
* vendorFolderName (e.g. spinzar)
* packageFolderName (e.g. balance-sheet)
* packageHumanName (e.g. balance-sheet)
* composerName (e.g. spinzar/balance-sheet)
* composerDesc (e.g. A balance sheet)
* composerKeywords (e.g. balance,sheet)
* licence (e.g. MIT)
* phpVersion (e.g. >=7.0)
* aliasName (e.g. balance-sheet)
* configFileName (e.g. balance-sheet)
* year (e.g. 2022)
* name (e.g. Nassim Nasibullah)
* email (e.g. spinzar.inc@gmail.com)
* githubPackageUrl (e.g. <https://github.com/spinzar/balance-sheet>)

## Things you need to do manually:

* In README.md:
  * StyleCI repository identifier
  * Package description
  * Usage section

## Security

If you discover any security related issues, please email spinzar.inc@gmail.com instead of using the issue tracker.

## Credits

- [Nassim Nasibullah](https://github.com/spinzar)
- [All contributors](https://github.com/spinzar/laravel-package-generator/graphs/contributors)
