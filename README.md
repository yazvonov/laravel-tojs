# Transform PHP Vars to JavaScript for Laravel

## How to install

```
composer require yazvonov/laravel-tojs
```

## What It Does
This package Transform PHP Vars to JavaScript.


Put variables
```php
ToJs::put([
    'variable1' => 'I want to see you in JavaScript',
    'variable2' => 'I want to see you in JavaScript too',
]);
```

Add tag <b>@tojs</b> to you blade template before \<script\>
```blade
@tojs
```

You will see this code on you page, and you can you it in JavaScript like <b>window.laravel.variable1, window.laravel.variable2</b>
```javascript
<script>window.laravel = {"variable1":"I want to see you in JavaScript","variable2":"I want to see you in JavaScript too"};</script>
```

## Configuration
You can change name in javascript, just add 
```
TOJS_VAR_NAME=another_name 
```
to your .env file.

### Security

If you discover any security-related issues, please email [zvonovyo@gmail.com](mailto:zvonovyo@gmail.com) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
