<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "{{%firm}}".
 *
 * @property int $id
 * @property string $name
 * @property int $building_id
 * @property string $phones
 * @property int $created_at
 *
 * @property Building $building
 * @property FirmCategory[] $firmCategories
 * @property Category[] $categories
 */
class Firm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%firm}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'building_id', 'created_at'], 'required'],
            [['building_id', 'created_at'], 'integer'],
            [['name', 'phones'], 'string', 'max' => 255],
            [['building_id'], 'exist', 'skipOnError' => true, 'targetClass' => Building::className(), 'targetAttribute' => ['building_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'building_id' => 'Building ID',
            'phones' => 'Phones',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuilding()
    {
        return $this->hasOne(Building::className(), ['id' => 'building_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirmCategories()
    {
        return $this->hasMany(FirmCategory::className(), ['firm_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'category_id'])->viaTable('{{%firm_category}}', ['firm_id' => 'id']);
    }
}
