<?php
namespace app\modules\api\query;

class FirmQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/
    /**
     * @inheritdoc
     * @return \gis\modules\api\models\Firm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }
    /**
     * @inheritdoc
     * @return \gis\modules\api\models\Firm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}