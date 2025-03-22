<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siteusers".
 *
 * @property integer $siteuser_id
 * @property integer $subscriber_type_reference_id
 * @property string $email
 * @property string $usrname
 * @property string $password
 * @property string $usertype
 * @property integer $active_inactive
 * @property string $last_login
 */
class Siteusers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siteusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subscriber_type_reference_id', 'email', 'password', 'usertype'], 'required'],
            [['subscriber_type_reference_id', 'active_inactive'], 'integer'],
            [['usertype'], 'string'],
            [['last_login'], 'safe'],
            [['email', 'usrname', 'password'], 'string', 'max' => 145],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'siteuser_id' => 'Siteuser ID',
            'subscriber_type_reference_id' => 'Reference ID',
            'email' => 'Email',
            'usrname' => 'Usrname',
            'password' => 'Password',
            'usertype' => 'Usertype',
            'active_inactive' => 'Active Inactive',
            'last_login' => 'Last Login',
        ];
    }
}
