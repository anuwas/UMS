<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\StateMaster;

/**
 * StateMasterSearch represents the model behind the search form about `common\models\StateMaster`.
 */
class StateMasterSearch extends StateMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'country_id'], 'integer'],
            [['state_name', 'state_code', 'crated_date'], 'safe'],
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
        $query = StateMaster::find();

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
            'state_id' => $this->state_id,
            'country_id' => $this->country_id,
            'crated_date' => $this->crated_date,
        ]);

        $query->andFilterWhere(['like', 'state_name', $this->state_name])
            ->andFilterWhere(['like', 'state_code', $this->state_code]);

        return $dataProvider;
    }
}
