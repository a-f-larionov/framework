## Framework (демо-код)
Framework

### Простой код фреймоврока, с применением:

- [composer](https://getcomposer.org/)
- [dependency injection](https://ru.wikipedia.org/wiki/%D0%92%D0%BD%D0%B5%D0%B4%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8)
- роутинга
- MVC


### Life Cycle:

- entry point /public/index.php;
- добавление зависимостей указанных в переменной providers массива файла конфигурации config.php;
- обработка роутинга на основе файла routes.php;


### Зависимости (пакеты):

- php-di/php-di
- symfony/var-dumper
- symfony/http-foundation
- symfony/routing
- symfony/config
- doctrine/orm
- vlucas/phpdotenv
