<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QualityAssurance */

$this->title = 'Create Quality Assurance';
$this->params['breadcrumbs'][] = ['label' => 'Quality Assurances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quality-assurance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
