<?php

namespace app\modules\api\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

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

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
            ],
        ];
    }

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
            [['address'], 'required'],
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


    public function fields()
    {
        return [
            'id',
            'address',
            'geo_lat',
            'geo_lon',
        ];
    }

    public function extraFields()
    {
        return [
            'firms',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirms()
    {
        return $this->hasMany(Firm::className(), ['building_id' => 'id']);
    }


    /**
     * @inheritdoc
     * @return \app\modules\api\query\BuildingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\api\query\BuildingQuery(get_called_class());
    }


}
