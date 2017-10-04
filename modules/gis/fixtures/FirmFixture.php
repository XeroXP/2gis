<?php

namespace app\modules\gis\fixtures;

use yii\test\ActiveFixture;

class FirmFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\gis\models\Firm';
    public $dataFile = '@app/modules/gis/fixtures/data/firm.php';
}