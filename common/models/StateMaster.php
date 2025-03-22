<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "state_master".
 *
 * @property integer $state_id
 * @property integer $country_id
 * @property string $state_name
 * @property string $state_code
 * @property string $crated_date
 *
 * @property CountryMaster $country
 */
class StateMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id'], 'required'],
            [['country_id'], 'integer'],
            [['crated_date'], 'safe'],
            [['state_name', 'state_code'], 'string', 'max' => 45],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => CountryMaster::className(), 'targetAttribute' => ['country_id' => 'country_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'country_id' => 'Country ID',
            'state_name' => 'State Name',
            'state_code' => 'State Code',
            'crated_date' => 'Crated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(CountryMaster::className(), ['country_id' => 'country_id']);
    }
}
