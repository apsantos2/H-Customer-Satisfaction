<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DepartmentHead */

$this->title = 'Create Department Head';
$this->params['breadcrumbs'][] = ['label' => 'Department Heads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-head-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
