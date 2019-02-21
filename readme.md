###Laravel Contact Form Package
[![Total Downloads](https://poser.pugx.org/csesumonpro/contact/downloads)](https://packagist.org/packages/csesumonpro/contact)
[![License](https://poser.pugx.org/csesumonpro/contact/license)](https://packagist.org/packages/csesumonpro/contact)
[![Latest Stable Version](https://poser.pugx.org/csesumonpro/contact/v/stable)](https://packagist.org/packages/csesumonpro/contact)

It's Contact From Package when user submit a contact message from your web site frontend you will manage it from Backend(Admin panel) with send contact message of your mail(Admin Mail). 
Replay their message from admin panel.

## INSTALLATION

Install the package through [Composer](http://getcomposer.org/). 

For Laravel 5.6 or 5.7~:
```composer require "csesumonpro/contact"```

## CONFIGURATION

1. Open config/app.php and add this line to your Service Providers Array. 
NOTE: If you are using laravel 5.5 or above, this will be automatically added by its auto discovery.
  ```php
  csesumonpro\contact\ContactServiceProvider::class
  ```

3. Optional configuration file (useful if you plan to have full control)
```php
php artisan vendor:publish --provider="csesumonpro\contact\ContactServiceProvider" --tag="config"
```
## HOW TO USE
## Usage

    
Result:
![Preview](https://user-images.githubusercontent.com/29582239/53131105-19756000-3596-11e9-95c8-195727820942.PNG)

## Reference

[Packagist](https://packagist.org/packages/csesumonpro/contact)
[Github](https://packagist.org/packages/csesumonpro/contact)

## License

The Laravel Shopping Cart is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)