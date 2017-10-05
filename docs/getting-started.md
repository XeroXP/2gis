# Установка проекта

**Установка**

1.Скачать проект
```
php
git clone git@github.com:Maksclub/2gis.git maksclub
cd maksclub
composer update
```
2.Переименовать файл /config/_db.php в db.php и настроить свою БД

3.Применить миграции:
```php
./yii migrate/up
```


## Демоданные
Применить фикстуры:
```php
./yii fixture Category --namespace='app\modules\gis\fixtures'
./yii fixture Building --namespace='app\modules\gis\fixtures'
./yii fixture Firm --namespace='app\modules\gis\fixtures'
./yii fixture FirmCategory --namespace='app\modules\gis\fixtures'
./yii fixture Phone --namespace='app\modules\gis\fixtures'
./yii fixture FirmPhone --namespace='app\modules\gis\fixtures'

```
TODO:: Сделать одной командой bash


