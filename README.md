<div align="center">
    <img src="https://raw.githubusercontent.com/yuges-code/laravel-orderable/master/assets/logo.png">
</div>

<div align="center">
    <b>Build<b>
    <div>
        <img
            alt="GitHub Branch Check Runs"
            src="https://img.shields.io/github/check-runs/yuges-code/laravel-orderable/main"
        >
        <img
            alt="GitHub Tests Action Status"
            src="https://img.shields.io/github/actions/workflow/status/yuges-code/laravel-orderable/testing.yml?branch=main&label=tests&style=flat-square"
        >
    </div>
</div>

<div align="center">
    <b>Project</b>
    <div>
        <img alt="GitHub Release" src="https://img.shields.io/github/v/release/yuges-code/laravel-orderable">
        <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/yuges-code/laravel-orderable">
        <img alt="GitHub License" src="https://img.shields.io/github/license/yuges-code/laravel-orderable">
        <img alt="Packagist Stars" src="https://img.shields.io/packagist/stars/yuges-code/laravel-orderable">
        <img
            alt="Packagist Dependency Version"
            src="https://img.shields.io/packagist/dependency-v/yuges-code/laravel-orderable/php"
        >
    </div>
</div>

<div align="center">
    <b>Quality</b>
</div>

<div align="center">
    <h1>Laravel Orderable</h1>
</div>

<div align="center">
    <h3>📶 Order generation for Laravel eloquent models</h3>
</div>

<br>

# 💿 Installation

### → Composer

You can install the package via composer:

```
composer require yuges-code/laravel-orderable
```

### → Publishing Config

Publishing the config file (config/orderable.php) is optional:

```
php artisan vendor:publish --provider="Yuges\Orderable\Providers\OrderableServiceProvider" --tag="orderable-configs"
```

### → Changing Migrations

You need to change the migration to create the order column:

```
$table->unsignedInteger('order')->default(1)->index();
```

or

```
$table->order();
```

### → Running Migrations

After that, you need to run migrations:

```
php artisan migrate
```

<br>

# 🧪 Running Tests

### → PHPUnit tests

To run tests, run the following command:

```
composer test
```

<br>

# ⚖️ License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

<br>

# 🙆🏼‍♂️ Authors Information

Created in 2025 by:

- [Yuges-code](https://github.com/yuges-code)
- [All Contributors](../../contributors)
