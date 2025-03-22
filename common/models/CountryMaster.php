<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "country_master".
 *
 * @property integer $country_id
 * @property string $name
 * @property string $iso_code_2
 * @property string $iso_code_3
 * @property integer $postcode_required
 * @property integer $status
 */
class CountryMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'iso_code_2', 'iso_code_3', 'postcode_required'], 'required'],
            [['postcode_required', 'status'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['iso_code_2'], 'string', 'max' => 2],
            [['iso_code_3'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'name' => 'Name',
            'iso_code_2' => 'Iso Code 2',
            'iso_code_3' => 'Iso Code 3',
            'postcode_required' => 'Postcode Required',
            'status' => 'Status',
        ];
    }
}
