#Slim
[一款 PHP 微框架]http://www.slimphp.net/docs/
##安装 Slim
* composer require slim/slim "^3.0"
* [slimphp/Slim-Skeleton]https://github.com/slimphp/Slim-Skeleton
php composer.phar create-project slim/slim-skeleton my-app-name
##doctrine
* composer require "alcaeus/mongo-php-adapter"
* add to composer.json
```json
    "provide": {
      "ext-mongo": "1.6.14"
    }
  ```
* composer require "doctrine/mongodb-odm"
