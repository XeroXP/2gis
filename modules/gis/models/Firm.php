<?php

namespace app\modules\gis\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

/**
 * This is the model class for table "{{%firm}}".
 *
 * @property int $id
 * @property string $name
 * @property int $building_id
 * @property int $created_at
 *
 * @property Building $building
 * @property FirmCategory[] $firmCategories
 * @property Category[] $categories
 */
class Firm extends \yii\db\ActiveRecord implements Linkable
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
        return '{{%firm}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'building_id'], 'required'],
            [['building_id', 'created_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
        ];
    }

    /*
     * HATEOAS
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['firm/view', 'id' => $this->id], true),
        ];
    }



    // Связанные модели
    // доступны как ?expand=building,categories
    public function extraFields()
    {
        return [
            'building',
            'categories',
            'phones',
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




    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirmPhones()
    {
        return $this->hasMany(FirmPhone::className(), ['firm_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id' => 'phone_id'])->viaTable('{{%firm_phone}}', ['firm_id' => 'id']);
    }


    /**
     * @inheritdoc
     * @return \app\modules\gis\query\FirmQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\gis\query\FirmQuery(get_called_class());
    }
}
