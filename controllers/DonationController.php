<?php

namespace app\controllers;

use app\models\DonationForm;

class DonationController extends \yii\web\Controller{
	public function actionIndex(){
		$model = new DonationForm;
		return $this->render('form',compact('model'));
	}
}