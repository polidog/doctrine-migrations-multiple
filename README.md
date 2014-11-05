複数データベースでのマイグレーションのサンプル
========================

### setup

```
$ git clone https://github.com/polidog/doctrine-migrations-multiple.git
$ cd doctrine-migrations-multiple
$ curl -sS https://getcomposer.org/installer | php
$ composer.phar install

```

### migrate

```
$ app/console doctrine:migrations:migrate

$ app/console doctrine:migrations:migrate --em=postgres
```
