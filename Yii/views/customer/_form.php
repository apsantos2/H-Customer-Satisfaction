<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cust_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cust_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cust_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cust_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Delete', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
