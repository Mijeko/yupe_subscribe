<?php

Yii::import('application.modules.subscribe.models.entity.*');

class SubscribeWidget extends \yupe\widgets\YWidget
{
	public $view = 'default';

	public function run()
	{
		$model = new Subscribe();

		return $this->render($this->view, [
			'model' => $model
		]);
	}
}