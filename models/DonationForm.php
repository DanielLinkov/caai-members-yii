<?php

namespace app\models;

class DonationForm extends \yii\base\Model{
	public $name;
	public $email;
	public $city;

	public function rules(){
		return [
			[['name','email','city'],'required'],
		];
	}
	public function attributeLabels()
	{
		return [
			'name'=>'Име *',
			'email'=>'Емейл *',
			'city'=>'Град *'
		];
	}
}