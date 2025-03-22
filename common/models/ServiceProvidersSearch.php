<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ServiceProviders;

/**
 * ServiceProvidersSearch represents the model behind the search form about `common\models\ServiceProviders`.
 */
class ServiceProvidersSearch extends ServiceProviders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_provider_id', 'state_id', 'discipline_id', 'jobtype_group_id', 'termscondition'], 'integer'],
            [['first_name', 'last_name', 'address', 'city', 'zipcode', 'email', 'direct_phone_number', 'sms_phone_number', 'HCA_affiliation', 'licenseid', 'national_provider_identifer', 'password'], 'safe'],
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
        $query = ServiceProviders::find();

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
            'service_provider_id' => $this->service_provider_id,
            'state_id' => $this->state_id,
            'discipline_id' => $this->discipline_id,
            'jobtype_group_id' => $this->jobtype_group_id,
            'termscondition' => $this->termscondition,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'direct_phone_number', $this->direct_phone_number])
            ->andFilterWhere(['like', 'sms_phone_number', $this->sms_phone_number])
            ->andFilterWhere(['like', 'HCA_affiliation', $this->HCA_affiliation])
            ->andFilterWhere(['like', 'licenseid', $this->licenseid])
            ->andFilterWhere(['like', 'national_provider_identifer', $this->national_provider_identifer])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
