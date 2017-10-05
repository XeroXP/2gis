<?php

namespace app\modules\gis\fixtures;

use yii\test\ActiveFixture;

class FirmPhoneFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\gis\models\FirmPhone';
    public $dataFile = '@app/modules/gis/fixtures/data/firm_phone.php';
}