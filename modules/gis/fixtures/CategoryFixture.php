<?php

namespace app\modules\gis\fixtures;

use yii\test\ActiveFixture;

class CategoryFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\gis\models\Category';
    public $dataFile = '@app/modules/gis/fixtures/data/category.php';
}