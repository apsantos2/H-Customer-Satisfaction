<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GeneralManager */

$this->title = 'Create General Manager';
$this->params['breadcrumbs'][] = ['label' => 'General Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-manager-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
