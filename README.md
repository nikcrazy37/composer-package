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
$redactor->setString('Some string');
echo $redactor->setUpper(); // SOME STRING

// OR

$redactor = new StringRedactor('Some string');
echo $redactor->setUpper(); // SOME STRING
```