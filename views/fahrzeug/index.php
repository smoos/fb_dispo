<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fahrzeugs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrzeug-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fahrzeug', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'typ',
            'tag',
            'kennzeichen',
            'schluessel',
            // 'stuetzpunkt',
            // 'km_abholung',
            // 'km_dekt_start',
            // 'km_dekt_ende',
            // 'km_abgabe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
