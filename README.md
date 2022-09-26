# Filament Boring Avatars

![Filament Boring Avatars Banner](https://banners.beyondco.de/Filament%20Boring%20Avatars.png?theme=light&packageManager=composer+require&packageName=cmdinglasan%2Ffilament-boring-avatars&pattern=architect&style=style_2&description=Use+Boring+Avatars+as+Filament+User+Avatars&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cmdinglasan/filament-boring-avatars.svg?style=flat-square)](https://packagist.org/packages/cmdinglasan/filament-boring-avatars)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/cmdinglasan/filament-boring-avatars/run-tests?label=tests)](https://github.com/cmdinglasan/filament-boring-avatars/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/cmdinglasan/filament-boring-avatars/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/cmdinglasan/filament-boring-avatars/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cmdinglasan/filament-boring-avatars.svg?style=flat-square)](https://packagist.org/packages/cmdinglasan/filament-boring-avatars)

Change the default avatar URL provider for Filament to one from Boring Avatars.

## Installation

You can install the package via composer:

```bash
composer require cmdinglasan/filament-boring-avatars
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-boring-avatars-config"
```

This is the contents of the published config file:

```php
return [
    // default source url for Boring Avatars API
    'url' => 'https://source.boringavatars.com',

    // variants = marble (default), beam, pixel, sunset, ring, bauhaus
    'variant' => 'marble',

    // size in px
    'size' => '40',

    // array of colors to use
    'colors' => ['#264653','#2a9d8f','#e9c46a','#f4a261','#e76f51'],
];
```

## Usage

Inside the Filament `config.php` file, change the `avatar_url_provider` to `Cmdinglasan\FilamentBoringAvatars\AvatarProviders\UiAvatarsProvider::class`.

```php
/*
|--------------------------------------------------------------------------
| Default Avatar Provider
|--------------------------------------------------------------------------
|
| This is the service that will be used to retrieve default avatars if one
| has not been uploaded.
|
*/

'default_avatar_provider' => Cmdinglasan\FilamentBoringAvatars\AvatarProviders\UiAvatarsProvider::class,
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Christian Dinglasan](https://github.com/cmdinglasan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
