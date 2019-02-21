
[![Total Downloads](https://poser.pugx.org/csesumonpro/contact/downloads)](https://packagist.org/packages/csesumonpro/contact)
[![License](https://poser.pugx.org/csesumonpro/contact/license)](https://packagist.org/packages/csesumonpro/contact)
[![Latest Stable Version](https://poser.pugx.org/csesumonpro/contact/v/stable)](https://packagist.org/packages/csesumonpro/contact)
#Laravel Contact Form 
It's Contact From Package when user submit a contact message from your web site frontend you will manage it from Backend(Admin panel) with send contact message of your mail(Admin Mail). 
Replay their message from admin panel.

## INSTALLATION

Install the package through [Composer](http://getcomposer.org/). 

For Laravel 5.6 or 5.7~:
```composer require "csesumonpro/contact"```

## CONFIGURATION

```1```. Open config/app.php and add this line to your Service Providers Array. 
NOTE: If you are using laravel 5.5 or above, this will be automatically added by its auto discovery.
  ```php
  csesumonpro\contact\ContactServiceProvider::class
  ```

```2```. After successfully install package just run below command
```php
php artisan vendor:publish --provider="csesumonpro\contact\ContactServiceProvider"
```
## HOW TO USE
* [Usage](#usage)
* [Mail Setup](#mails)
* [Admin Mail Setup](#adminmails)
* [View Change](#viewchange)
* [Route](#route)



## Usage
### IMPORTANT NOTE!
Must Be configured your mail in your app env file for send email from contact form!!.
## Mails
##### Before Google Mail Configuration must be use a mail which mail not two factor authorized.
Must need for send a mail from localhost 
Allow less secure option enable [Less Secure Apps](https://myaccount.google.com/lesssecureapps). 
![less secure apps](https://user-images.githubusercontent.com/29582239/53194855-922ff700-363e-11e9-93df-b3bdb939ca25.PNG)

Example:
Google Mail Configuration
```php
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=testmail@gmail.com
MAIL_PASSWORD=12345678
MAIL_ENCRYPTION=tls

```
```
OR configure Mailtrap mail, when use live server configure your mail using sever crediential
```   
## Adminmails
```blade
Go to your project config folder then contact.php 
Change your admin mail(Contact message received mail) from contact.php 

```
## Viewchange
```blade
If you want to change your contact form style go to resource>views>csesumonpro>contact>contact then show blade file change your design what are you want..
```
## Route 
Route Action 
```php
   Just use this route for display contct form anywhere 
   <a href="{{route('contact.form')}}">Contact</a> 
```

## Contact Form:
![Preview](https://user-images.githubusercontent.com/29582239/53131105-19756000-3596-11e9-95c8-195727820942.PNG)

## Reference

[Packagist](https://packagist.org/packages/csesumonpro/contact)
[Github](https://packagist.org/packages/csesumonpro/contact)

## License

The Laravel Shopping Cart is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)