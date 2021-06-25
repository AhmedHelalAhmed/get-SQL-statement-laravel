# Get MYSQL statement laravel

This package allows to get mysql statement that query builder in laravel made it for debugging purpose.

## Basic usage

### Dump simple query:

```php
    $query = \App\Models\User::where('id', 1)->verified();
    dump(getMYSQLStatement($query));
    // select * from `users` where `id` = 1 and `email_verified_at` is not null
```

## Installation

You can install the package via composer:

```bash
composer require --dev ahmedhelalahmed/get-mysql-statement-laravel
```

## Contributing

Thank you for considering contributing to ahmedhelalahmed/get-MYSQL-statement-laravel

### Security

If you discover a security vulnerability within ahmedhelalahmed/laravel-greeting , please send an e-mail to Ahmed Helal via ahmed.helal.online@gmail.com. All security vulnerabilities will be promptly addressed.

## Credits

- [Ahmed Helal Ahmed](https://github.com/ahmedhelalahmed)

## License

ahmedhelalahmed/laravel-greeting is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
