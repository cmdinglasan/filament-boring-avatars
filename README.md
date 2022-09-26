# Change the default avatar URL provider for Filament to one from Boring Avatars.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cmdinglasan/filament-boring-avatars.svg?style=flat-square)](https://packagist.org/packages/cmdinglasan/filament-boring-avatars)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/cmdinglasan/filament-boring-avatars/run-tests?label=tests)](https://github.com/cmdinglasan/filament-boring-avatars/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/cmdinglasan/filament-boring-avatars/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/cmdinglasan/filament-boring-avatars/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cmdinglasan/filament-boring-avatars.svg?style=flat-square)](https://packagist.org/packages/cmdinglasan/filament-boring-avatars)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/filament-boring-avatars.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/filament-boring-avatars)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

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

Inside the Filament `config.php` file, change the `avatar_url_provider` to `BoringAvatarsAvatarUrlProvider::class`.

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

'default_avatar_provider' => Cmdinglasan\FilamentBoringAvatars\FilamentBoringAvatarsServiceProvider::class,
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
