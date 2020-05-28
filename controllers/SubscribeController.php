<?php

class SubscribeController extends yupe\components\controllers\FrontController
{
	public function actionCreate()
	{
		$model = new Subscribe();

		// Uncomment the following line if AJAX validation is needed
//		 $this->performAjaxValidation($model);

		if (($data = Yii::app()->getRequest()->getPost('Subscribe')) !== null) {

			$model->setAttributes($data);

			if ($model->save()) {
				Yii::app()->user->setFlash(yupe\widgets\YFlashMessages::SUCCESS_MESSAGE, 'Вы успешно подписались');
			}
		}

		$this->redirect('/');
	}


	protected function performAjaxValidation(Subscribe $model)
	{
		if (Yii::app()->getRequest()->getIsAjaxRequest() && Yii::app()->getRequest()->getPost('ajax') === 'category-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}