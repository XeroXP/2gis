<?php

namespace app\modules\gis\fixtures;

use yii\test\ActiveFixture;

class FirmCategoryFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\gis\models\FirmCategory';
    public $dataFile = '@app/modules/gis/fixtures/data/firm_category.php';
}