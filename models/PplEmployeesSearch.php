<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PplEmployees;
use app\components\CompanyAccessComp;
use app\components\UtilComp;

/**
 * PplEmployeesSearch represents the model behind the search form about `app\models\PplEmployees`.
 */
class PplEmployeesSearch extends PplEmployees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_employee_id', 'sys_company_id', 'employee_id', 'Gender'], 'integer'],
            [['employee_name', 'employee_doj', 'employee_dob', 'employee_photo_img', 'Address'], 'safe'],
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
        $query = PplEmployees::find();

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
            'sys_employee_id' => $this->sys_employee_id,
            'sys_company_id' => $this->sys_company_id,
            'employee_id' => $this->employee_id,
            'employee_doj' => $this->employee_doj,
            'employee_dob' => $this->employee_dob,
            'Gender' => $this->Gender,
        ]);

        $query->andFilterWhere(['like', 'employee_name', $this->employee_name])
            ->andFilterWhere(['like', 'employee_photo_img', $this->employee_photo_img])
            ->andFilterWhere(['like', 'Address', $this->Address]);
        
            
            $query->andWhere(['sys_company_id'=>CompanyAccessComp::getCompanyAccess()]);

        return $dataProvider;
    }
}
