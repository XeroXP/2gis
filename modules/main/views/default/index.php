<?php

/* @var $this yii\web\View */

$this->title = 'Test 2GIS!';
?>
<div class="main-default-index">


    <!--
    ************************************
    -->
    <div class="section block-main">
        <div class="container">
            <div class="block__item">
                <div class="row">


                    <div class="col-md-8">
                        <div class="block-main__title">

                            <h1>
                                <b>Тестовое задание</b><br>
                                упрощенный справочник (REST API)
                            </h1>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>




    <!--
    ************************************
    -->
    <div class="section block-about">
        <div class="container">
            <div class="block__item">
                <div class="row">

                    <div class="col-md-12">
                        <h2>Упрошенная версия 2Гис справочника.</h2><br>

                    </div>

                    <div class="col-md-6">
                        <div class="">

                            <p>
                                Предполагаемая аудитория 1 000 000 пользователей в месяц. <br>
                                Размер базы фирм составляет порядка 100 000 записей.</p>

                            <p>
                                Наш справочник будет имеет 3 вида объектов:

                            <ul>
                                    <li>Фирма</li>
                                    <li>Здание</li>
                                    <li>Рубрика</li>
                                </ul>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6">

                        <ol>
                            <li>Спроектировать базу данных + реализовать скрипт ее формирования</li>
                            <li>Выполнить конфигурацию веб-сервера (любого)</li>
                            <li>Реализовать API согласно ТЗ</li>
                            <li>Подготовить тестовые данные (дамп базы, скрипт для генерации тестового набора данных)
                            </li>
                            <li>
                                Написать краткую документацию по использованию сервиса:
                                <ul>
                                    <li>список методов API, с кратким описанием за что они отвечают;</li>
                                    <li>списка всех параметров для каждого метода;</li>
                                    <li>краткое описание формата ответа каждого метода.</li>
                                </ul>
                            </li>
                            <li>
                                Опубликовать/развернуть приложение, предоставить нам ссылки по которым можно протестировать работу сервиса
                            </li>
                        </ol>
                    </div>


                </div>
            </div>
        </div>
    </div>





    <!--
    ************************************
    -->
    <div class="section block-api">
        <div class="container">
            <div class="block__item">
                <div class="row">


                    <div class="col-md-12">
                        <div class="">

                            <h2>Методы REST API</h2>

                        </div>
                    </div>

                    <div class="col-md-8">






                        <h3>Фирма</h3>
                        Пример: <br>
                        <a href="/v1/firm?expand=building,categories,phones" target="_blank">/v1/firm?expand=building,categories,phones</a>
<pre>
<code class="html">
/v1/firm                         Список всех фирм
/v1/firm/1                       Фирма с id=1
/v1/firm/1?expand=building,phones,categories       дополнительные поля (building, categories)
</code>
</pre>
<pre>
<code class="JSON">
...
items: [
{
    id: 1,
    name: "Фирма Максима Федорова",
    building_id: 1,
    created_at: 1507067875,
    building: {
        id: 1,
        address: "Зеленый бор 11",
        geo_lat: "55.002316",
        geo_lon: "83.006873"
    },
    categories: [
        {
            id: 1,
            name: "Строительство"
        },
        {
            id: 2,
            name: "Еда"
        }
    ],
    phones: [
        {
            phone: "8 999 999-99-88"
        },
        {
            phone: "8 222 333-55-77"
        }
    ],
    _links: {
        self: {
        href: "http://2gis.loc/v1/firms/1"
    }
}
...
</code>
</pre>


                        <br>
                        <br>


                        <h3>Здание</h3>
                        Пример: <br>
                        <a href="/v1/building?expand=firms" target="_blank">/v1/building?expand=firms</a>
                        <pre>
<code class="html">
/v1/building                     Список всех зданий
/v1/building/1                   Здание с id=1
/v1/building/1?expand=firms      Все фирмы в здании
</code>
</pre>


                        <br>
                        <br>



                        <h3>Категория</h3>
                        Пример: <br>
                        <a href="/v1/category?expand=firms" target="_blank">/v1/category?expand=firms</a>
<pre>
<code class="html">
/v1/category                    Список категорий
/v1/category/1                  Категория с id=1
/v1/category/1?expand=firms     Все фирмы с заданной категорией
</code>
</pre>


                        <br>
                        <br>



<h3>Дополнительные параметры</h3>
<pre>
<code class="html">
?expand=firms,categories,building   Вывод дополнительных полей (выводятся как в списке, так и дял одного экземпляра)
?fileds=name,id                 Определяет какие именно поля выводить
</code>
</pre>




                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
