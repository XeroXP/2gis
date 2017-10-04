<?php

namespace app\modules\api\fixtures;

use yii\test\ActiveFixture;

class BuildingFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\api\models\Building';
    public $dataFile = '@app/modules/api/fixtures/data/building.php';
}