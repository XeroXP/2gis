# Описание методов REST API

**Здание**
```
/v1/building                     Список всех зданий
/v1/building/1                   Здание с id=1
/v1/building/1?expand=firms      Все фирмы в здании
```

**Фирма**
```
/v1/firm                         Список всех фирм
/v1/firm/1                       Фирма с id=1 
/v1/firm/1?expand=building       дополнительные поля (building, categories)
```

**Категория**
```
/v1/category                    Список категорий
/v1/category/1                  Категория с id=1
/v1/building/1?expand=firms     Все фирмы с заданной категорией
```

**Дополнительные параметры**
```
?expand=firms,categories,building   Вывод дополнительных полей (выводятся как в списке, так и дял одного экземпляра)
?fileds=name,id                 Определяет какие именно поля выводить
?se
```