<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sp_grouptype_master".
 *
 * @property integer $group_id
 * @property string $group_name
 * @property string $created_date
 */
class SpGrouptypeMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_grouptype_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_date'], 'safe'],
            [['group_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'group_id' => 'Group ID',
            'group_name' => 'Group Name',
            'created_date' => 'Created Date',
        ];
    }
}
