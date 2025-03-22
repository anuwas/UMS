<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "healthcare_agencies".
 *
 * @property integer $agencies_id
 * @property integer $state_id
 * @property string $registered_company_name
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $zipcode
 * @property string $email
 * @property string $direct_phone_number
 * @property string $sms_phone_number
 * @property string $password
 * @property integer $agree
 * @property string $created_date
 *
 * @property StateMaster $state
 */
class HealthcareAgencies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'healthcare_agencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'agree'], 'integer'],
            [['address'], 'string'],
            [['created_date'], 'safe'],
            [['registered_company_name', 'first_name', 'last_name', 'city', 'zipcode', 'email', 'direct_phone_number', 'sms_phone_number'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 145],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => StateMaster::className(), 'targetAttribute' => ['state_id' => 'state_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'agencies_id' => 'Agencies ID',
            'state_id' => 'State ID',
            'registered_company_name' => 'Registered Company Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'email' => 'Email',
            'direct_phone_number' => 'Direct Phone Number',
            'sms_phone_number' => 'Sms Phone Number',
            'password' => 'Password',
            'agree' => 'Agree',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(StateMaster::className(), ['state_id' => 'state_id']);
    }
}
