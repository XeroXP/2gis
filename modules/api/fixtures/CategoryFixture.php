<?php

namespace app\modules\api\fixtures;

use yii\test\ActiveFixture;

class CategoryFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\api\models\Category';
    public $dataFile = '@app/modules/api/fixtures/data/category.php';
}