# CDAP-Auth
CDAP login compose pachages for  Laravel

[![Latest Stable Version](https://poser.pugx.org/mdsami/cdap-auth/v/stable)](https://packagist.org/packages/mdsami/cdap-auth)
[![Total Downloads](https://poser.pugx.org/mdsami/cdap-auth/downloads)](https://packagist.org/packages/mdsami/cdap-auth)
[![License](https://poser.pugx.org/mdsami/cdap-auth/license)](https://packagist.org/packages/mdsami/cdap-auth)



For Laravel 6 and above

## Introduction
Integrate CDAP-Auth in your laravel application easily with this package. This package uses cdap-auth 's php SDK.

## License
CDAP-Auth  open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Getting Started
To get started add the following package to your `composer.json` file using this command.

    composer requiremdsami/cdap-auth

## Configuring
**Note: For Laravel 5.5 and above auto-discovery takes care of below configuration.**

When composer installs Laravel ZKteo  library successfully, register the `mdsami\cdap-auth\LaraZkteoServiceProvider` in your `config/app.php` configuration file.

```php
'providers' => [
    // Other service providers...
    mdsami\cdap-auth\CdapAuthServiceProvider::class,
],
```
Also, add the `cdap-auth` facade to the `aliases` array in your `app` configuration file:

```php
'aliases' => [
    // Other aliases
    'CdapAuth' => mdsami\cdap-auth\Facades\CdapAuth::class,
],
```
#### Add the cdap-auth credentials to the `.env` file