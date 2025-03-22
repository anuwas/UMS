<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CountryMaster;

/**
 * CountryMasterSearch represents the model behind the search form about `common\models\CountryMaster`.
 */
class CountryMasterSearch extends CountryMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'postcode_required', 'status'], 'integer'],
            [['name', 'iso_code_2', 'iso_code_3'], 'safe'],
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
        $query = CountryMaster::find();

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
            'country_id' => $this->country_id,
            'postcode_required' => $this->postcode_required,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'iso_code_2', $this->iso_code_2])
            ->andFilterWhere(['like', 'iso_code_3', $this->iso_code_3]);

        return $dataProvider;
    }
}
