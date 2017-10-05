<?php

namespace app\modules\gis\models;

use Yii;

/**
 * This is the model class for table "{{%phone}}".
 *
 * @property int $id
 * @property string $phone
 *
 * @property FirmPhone[] $firmPhones
 * @property Firm[] $firms
 */
class Phone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%phone}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirmPhones()
    {
        return $this->hasMany(FirmPhone::className(), ['phone_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirms()
    {
        return $this->hasMany(Firm::className(), ['id' => 'firm_id'])->viaTable('{{%firm_phone}}', ['phone_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\modules\gis\query\PhoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\gis\query\PhoneQuery(get_called_class());
    }
}
