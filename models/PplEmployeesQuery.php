<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PplEmployees]].
 *
 * @see PplEmployees
 */
class PplEmployeesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PplEmployees[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PplEmployees|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
