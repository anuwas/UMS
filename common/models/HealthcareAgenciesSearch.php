<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HealthcareAgencies;

/**
 * HealthcareAgenciesSearch represents the model behind the search form about `common\models\HealthcareAgencies`.
 */
class HealthcareAgenciesSearch extends HealthcareAgencies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agencies_id', 'state_id', 'agree'], 'integer'],
            [['registered_company_name', 'first_name', 'last_name', 'address', 'city', 'zipcode', 'email', 'direct_phone_number', 'sms_phone_number', 'password', 'created_date'], 'safe'],
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
        $query = HealthcareAgencies::find();

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
            'agencies_id' => $this->agencies_id,
            'state_id' => $this->state_id,
            'agree' => $this->agree,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'registered_company_name', $this->registered_company_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'direct_phone_number', $this->direct_phone_number])
            ->andFilterWhere(['like', 'sms_phone_number', $this->sms_phone_number])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
