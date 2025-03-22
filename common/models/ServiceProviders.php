<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_providers".
 *
 * @property integer $service_provider_id
 * @property integer $state_id
 * @property integer $discipline_id
 * @property integer $jobtype_group_id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $zipcode
 * @property string $email
 * @property string $direct_phone_number
 * @property string $sms_phone_number
 * @property string $HCA_affiliation
 * @property string $licenseid
 * @property string $national_provider_identifer
 * @property string $password
 * @property integer $termscondition
 * @property string $registered_company_name
 *
 * @property StateMaster $state
 * @property DisciplinesMaster $discipline
 * @property SpGrouptypeMaster $jobtypeGroup
 */
class ServiceProviders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_providers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'discipline_id', 'jobtype_group_id', 'termscondition'], 'integer'],
            [['first_name', 'last_name', 'address', 'city', 'zipcode', 'direct_phone_number', 'sms_phone_number', 'HCA_affiliation', 'licenseid', 'national_provider_identifer', 'password'], 'string', 'max' => 45],
            [['email', 'registered_company_name'], 'string', 'max' => 145],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => StateMaster::className(), 'targetAttribute' => ['state_id' => 'state_id']],
            [['discipline_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisciplinesMaster::className(), 'targetAttribute' => ['discipline_id' => 'discipline_id']],
            [['jobtype_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => SpGrouptypeMaster::className(), 'targetAttribute' => ['jobtype_group_id' => 'group_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_provider_id' => 'Service Provider ID',
            'state_id' => 'State ID',
            'discipline_id' => 'Discipline ID',
            'jobtype_group_id' => 'Jobtype Group ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'email' => 'Email',
            'direct_phone_number' => 'Direct Phone Number',
            'sms_phone_number' => 'Sms Phone Number',
            'HCA_affiliation' => 'Hca Affiliation',
            'licenseid' => 'Licenseid',
            'national_provider_identifer' => 'National Provider Identifer',
            'password' => 'Password',
            'termscondition' => 'Termscondition',
            'registered_company_name' => 'Registered Company Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(StateMaster::className(), ['state_id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(DisciplinesMaster::className(), ['discipline_id' => 'discipline_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobtypeGroup()
    {
        return $this->hasOne(SpGrouptypeMaster::className(), ['group_id' => 'jobtype_group_id']);
    }
}
