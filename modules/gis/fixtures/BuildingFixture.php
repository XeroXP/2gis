<?php

namespace app\modules\gis\fixtures;

use yii\test\ActiveFixture;

class BuildingFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\gis\models\Building';
    public $dataFile = '@app/modules/gis/fixtures/data/building.php';
}