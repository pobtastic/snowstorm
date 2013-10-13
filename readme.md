# Laravel 3 Snowstorm

Integrates Scott Schillers excellent snowstorm.js effect, see http://www.schillmania.com/projects/snowstorm for details.

### Installation

Install using Artisan CLI:

```shell
php artisan bundle:install snowstorm
```

Add the following line to application/bundles.php

```php
'snowstorm' => array('auto' => true),
```

Publish the bundle assets to your public folder.

```shell
php artisan bundle:publish
```

Add the following to the page where you want the Snowstorm script to be active.

```php
{{ Asset::container('snowstorm')->scripts(); }}
```
