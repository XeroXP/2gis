<?php

namespace app\modules\gis\models;

use Yii;

/**
 * This is the model class for table "{{%firm_phone}}".
 *
 * @property int $firm_id
 * @property int $phone_id
 *
 * @property Firm $firm
 * @property Phone $phone
 */
class FirmPhone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%firm_phone}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_id', 'phone_id'], 'required'],
            [['firm_id', 'phone_id'], 'integer'],
            [['firm_id', 'phone_id'], 'unique', 'targetAttribute' => ['firm_id', 'phone_id']],
            [['firm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Firm::className(), 'targetAttribute' => ['firm_id' => 'id']],
            [['phone_id'], 'exist', 'skipOnError' => true, 'targetClass' => Phone::className(), 'targetAttribute' => ['phone_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firm_id' => 'Firm ID',
            'phone_id' => 'Phone ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirm()
    {
        return $this->hasOne(Firm::className(), ['id' => 'firm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhone()
    {
        return $this->hasOne(Phone::className(), ['id' => 'phone_id']);
    }

    /**
     * @inheritdoc
     * @return \app\modules\gis\query\FirmPhoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\gis\query\FirmPhoneQuery(get_called_class());
    }
}
