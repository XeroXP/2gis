<?php

namespace app\modules\gis\query;

/**
 * This is the ActiveQuery class for [[\app\modules\gis\models\FirmPhone]].
 *
 * @see \app\modules\gis\models\FirmPhone
 */
class FirmPhoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\modules\gis\models\FirmPhone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\modules\gis\models\FirmPhone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
