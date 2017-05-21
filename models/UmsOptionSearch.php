<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UmsOption;

/**
 * UmsOptionSearch represents the model behind the search form about `app\models\UmsOption`.
 */
class UmsOptionSearch extends UmsOption
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_id', 'option_type', 'option_area', 'option_status', 'option_order', 'parent_option_id', 'enable_toolbox', 'level', 'add_data', 'edit_data', 'delete_data', 'view_data'], 'integer'],
            [['option_name', 'option_description', 'option_link', 'option_icon', 'object_reference_key', 'icon_class'], 'safe'],
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
        $query = UmsOption::find();

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
            'option_id' => $this->option_id,
            'option_type' => $this->option_type,
            'option_area' => $this->option_area,
            'option_status' => $this->option_status,
            'option_order' => $this->option_order,
            'parent_option_id' => $this->parent_option_id,
            'enable_toolbox' => $this->enable_toolbox,
            'level' => $this->level,
            'add_data' => $this->add_data,
            'edit_data' => $this->edit_data,
            'delete_data' => $this->delete_data,
            'view_data' => $this->view_data,
        ]);

        $query->andFilterWhere(['like', 'option_name', $this->option_name])
            ->andFilterWhere(['like', 'option_description', $this->option_description])
            ->andFilterWhere(['like', 'option_link', $this->option_link])
            ->andFilterWhere(['like', 'option_icon', $this->option_icon])
            ->andFilterWhere(['like', 'object_reference_key', $this->object_reference_key])
            ->andFilterWhere(['like', 'icon_class', $this->icon_class]);

        return $dataProvider;
    }
}
