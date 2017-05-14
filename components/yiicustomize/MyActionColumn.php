<?php
namespace app\components\yiicustomize;

use Yii;
use yii\grid\ActionColumn;
use yii\web\Session;
use yii\helpers\Html;
use yii\helpers\Url;

class MyActionColumn extends ActionColumn
{
	protected function setTemplate(){
		$session = new Session();
		$this->template='{view} {update} {delete}';
	}
	
	protected function initDefaultButton($name, $iconName, $additionalOptions = [])
	{
		$this->setTemplate();
		
		if (!isset($this->buttons[$name]) && strpos($this->template, '{' . $name . '}') !== false) {
			$this->buttons[$name] = function ($url, $model, $key) use ($name, $iconName, $additionalOptions) {
				switch ($name) {
					case 'view':
						$title = Yii::t('yii', 'View');
						break;
					case 'update':
						$title = Yii::t('yii', 'Update');
						break;
					case 'delete':
						$title = Yii::t('yii', 'Delete');
						break;
					default:
						$title = ucfirst($name);
				}
				$options = array_merge([
						'title' => $title,
						'aria-label' => $title,
						'data-pjax' => '0',
				], $additionalOptions, $this->buttonOptions);
				$icon = Html::tag('span', '', ['class' => "glyphicon glyphicon-$iconName"]);
				return Html::a($icon, $url, $options);
			};
		}
	}
}