<?php
namespace app\components;
use app\models\PplEmployees;
use app\models\PplEmployeesSearch;
use yii\data\ActiveDataProvider;

class PplemployeesSearchComp extends PplEmployeesSearch
{
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
        
        $query->andWhere(['sys_company_id'=>array(5,6)]);
        //$query->andWhere('sys_company_id>='.UtilComp::getLoggedUserCompanyId());
        
        return $dataProvider;
    }
    
}