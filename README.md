# thegiant/aes

## Description

This package is useful for data encryption and decryption

## Installation

This package can be installed via composer

``` php
composer require thegiant/aes
```

### Laravel >= 5.5

The package is auto-discovered on 5.5 and up!

### Laravel <= 5.4

Add the service provider to the `providers` array in your `config/app.php` file:

```php
'providers' => [
    // Other Laravel service providers...

    /*
    * Package Service Providers...
    */
    Thegiant\Aes\AesServiceProvider::class,

    // Other package service providers...
],
```

Publish Usable Helpers

```php
php artisan vendor:publish --tag=thegiant-aes-helper --force
```

> Note: use `--force` to update the existing files.

### Usage

Create Encryption and Dencryption key in `.env file` with the following Variables

`AES_KEY=`</br>
`AES_IV=`

## Contributions

Contributions and feedback are welcome! Feel free to open an issue or submit a pull request on GitHub.

## License

This package is open-source software licensed under the [MIT] license.
