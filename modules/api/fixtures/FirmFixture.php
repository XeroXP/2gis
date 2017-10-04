<?php

namespace app\modules\api\fixtures;

use yii\test\ActiveFixture;

class FirmFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\api\models\Firm';
    public $dataFile = '@app/modules/api/fixtures/data/firm.php';
}