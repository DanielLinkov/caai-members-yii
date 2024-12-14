<?php
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
?>
<h2>Моите координати</h2>
<?php

$form = ActiveForm::begin([
	'layout'=>'horizontal',
	'fieldConfig'=>[
		'horizontalCssClasses'=>['label'=>'col-sm-3 col-form-label text-sm-end','wrapper'=>'col-sm-9']
	]
]);

echo $form->field($model,'name');
echo $form->field($model,'email');
echo $form->field($model,'city');

echo Html::tag('div',Html::submitButton('Напред',['class'=>'btn btn-block btn-primary']),['class'=>'text-end']);
?>
<div class="text-success ms-sm-5">* Задължителни полета</div>
<?php ActiveForm::end(); ?>