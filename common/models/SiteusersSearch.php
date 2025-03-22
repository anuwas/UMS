<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siteusers;

/**
 * SiteusersSearch represents the model behind the search form about `common\models\Siteusers`.
 */
class SiteusersSearch extends Siteusers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siteuser_id', 'subscriber_type_reference_id', 'active_inactive'], 'integer'],
            [['email', 'usrname', 'password', 'usertype', 'last_login'], 'safe'],
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
        $query = Siteusers::find();

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
            'siteuser_id' => $this->siteuser_id,
            'subscriber_type_reference_id' => $this->subscriber_type_reference_id,
            'active_inactive' => $this->active_inactive,
            'last_login' => $this->last_login,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'usrname', $this->usrname])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'usertype', $this->usertype]);

        return $dataProvider;
    }
}
