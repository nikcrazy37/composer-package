# Редактор текста

Перевод текста в верхний регистр.

## Требования

- PHP 7.4

## Установка

```bash
$ composer require nikcrazy37/composer-package
```

## Использование

```php
<?php
$redactor = new StringRedactor();
echo $redactor->setUpper('Some string'); // SOME STRING
```