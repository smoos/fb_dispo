<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ladungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ladung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ladung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'auftrag',
            'art',
            'bezeichner',
            'anzahl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
