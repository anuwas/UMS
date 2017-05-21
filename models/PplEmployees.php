<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ppl_employees".
 *
 
  * @property integer $sys_employee_id
  * @property integer $sys_company_id
  * @property integer $employee_id
  * @property string $employee_name
  * @property string $employee_doj
  * @property string $employee_dob
  * @property string $employee_photo_img
  * @property string $Address
  * @property integer $Gender
  */
class PplEmployees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ppl_employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_company_id',  'employee_name', 'employee_doj', 'employee_dob', 'Gender'], 'required'],
            [['sys_company_id', 'employee_id', 'Gender'], 'integer'],
            [['employee_doj', 'employee_dob'], 'safe'],
            [['Address'], 'string'],
            [['employee_name', 'employee_photo_img'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_employee_id' => 'Sys Employee ID',
            'sys_company_id' => 'Sys Company ID',
            'employee_id' => 'Employee ID',
            'employee_name' => 'Employee Name',
            'employee_doj' => 'Employee Doj',
            'employee_dob' => 'Employee Dob',
            'employee_photo_img' => 'Employee Photo Img',
            'Address' => 'Address',
            'Gender' => 'Gender',
        ];
    }

    /**
     * @inheritdoc
     * @return PplEmployeesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PplEmployeesQuery(get_called_class());
    }
}
