<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "disciplinesMaster".
 *
 * @property integer $discipline_id
 * @property string $discipline_name
 * @property string $createdDate
 */
class DisciplinesMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disciplinesMaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discipline_name'], 'required'],
            [['createdDate'], 'safe'],
            [['discipline_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'discipline_id' => 'Discipline ID',
            'discipline_name' => 'Discipline Name',
            'createdDate' => 'Created Date',
        ];
    }
}
