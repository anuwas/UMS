<?php
namespace app\components\umsbuttons;
use yii;
use yii\base\Widget;

class CustomButtonWidget extends  Widget{
	public $button;
	public $type;
	public $cssclass;
	public $buttonOptions=array();
	
	public function init()
	{
		parent::init();
		$session=\Yii::$app->session;
		$rolearr=array();
		if(isset($session['loggedUser'])){
			foreach ($session['loggedUser']->umsUserRoleMaps as $values){
				array_push($rolearr, $values->role_id);
			}
		}
		
		//echo $this->type;
		//echo $this->cssclass;
		if ($this->button=== 'submit') {
			
			$this->type=$_SERVER['REQUEST_URI'];
			$this->button= ' my button '.$this->type;
		}
	}
	
	public function run()
	{
		//return \yii\helpers\Html::encode($this->button);
		//return $this->render('CustomButtonWidgetViews',['message' => $this->button]);
	}
}