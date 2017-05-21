<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UmsRoleOptionMap;

/**
 * UmsRoleOptionMapSearch represents the model behind the search form about `app\models\UmsRoleOptionMap`.
 */
class UmsRoleOptionMapSearch extends UmsRoleOptionMap
{
	public $rolename;
	public $optionname;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        		[['rolename'], 'safe'],
            [['role_id', 'option_id', 'enable', 'ums_role_option_map_id'], 'integer'],
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
        $query = UmsRoleOptionMap::find();
        $query->joinWith('role');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $dataProvider->sort->attributes['rolename'] =
        [
        		'asc' => ['ums_role.role_name' => SORT_ASC], // TABLE_NAME.COLUMN_NAME
        		'desc' => ['ums_role.role_name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'role_id' => $this->role_id,
            'option_id' => $this->option_id,
            'enable' => $this->enable,
            'ums_role_option_map_id' => $this->ums_role_option_map_id,
        ]);
        
        $query->andFilterWhere(['like', 'ums_role.role_name', $this->rolename]);

        return $dataProvider;
    }
}
