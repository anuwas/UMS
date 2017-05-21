<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UmsUserRoleMap;

/**
 * UmsUserRoleMapSearch represents the model behind the search form about `app\models\UmsUserRoleMap`.
 */
class UmsUserRoleMapSearch extends UmsUserRoleMap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ums_user_role_map_id', 'user_id', 'role_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UmsUserRoleMap::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ums_user_role_map_id' => $this->ums_user_role_map_id,
            'user_id' => $this->user_id,
            'role_id' => $this->role_id,
        ]);

        return $dataProvider;
    }
}
