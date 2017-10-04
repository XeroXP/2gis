<?php
namespace app\modules\api\query;

class BuildingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/
    /**
     * @inheritdoc
     * @return \app\modules\api\models\Building[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }
    /**
     * @inheritdoc
     * @return \app\modules\api\models\Building|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}