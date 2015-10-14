# Linkedin plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require oxenti/linkedin
```
In your app's 'AppController.php' set up the Linkedin componet:
```php
    ...
    $this->loadComponent('Linkedin.Linkedin');
    ...
```
