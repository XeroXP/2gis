<?php

namespace app\modules\gis\fixtures;

use yii\test\ActiveFixture;

class PhoneFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\gis\models\Phone';
    public $dataFile = '@app/modules/gis/fixtures/data/phone.php';
}