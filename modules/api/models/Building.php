<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "{{%building}}".
 *
 * @property int $id
 * @property string $address
 * @property string $geo_lat
 * @property string $geo_lon
 * @property int $created_at
 *
 * @property Firm[] $firms
 */
class Building extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%building}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'created_at'], 'required'],
            [['geo_lat', 'geo_lon'], 'number'],
            [['created_at'], 'integer'],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'geo_lat' => 'Geo Lat',
            'geo_lon' => 'Geo Lon',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirms()
    {
        return $this->hasMany(Firm::className(), ['building_id' => 'id']);
    }
}
