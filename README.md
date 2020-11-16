# Установка
```
git clone https://github.com/freimaks/zip24.git tasks
cd tasks
composer install
```

Composer используется для установки phpUnit.

# Тестирование
### Оба теста за раз
```
vendor/bin/phpunit tests/
```

### Каждый тест отдельно
```
vendor/bin/phpunit tests/Task2Test.php
vendor/bin/phpunit tests/Task3Test.php
```