<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GeneralManagerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'General Managers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-manager-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create General Manager', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gnrlmnger_number',
            'gnrlmnger_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
