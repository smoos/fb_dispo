<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kommentars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kommentar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kommentar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text',
            'fahrer',
            'angelegt',
            'status',
            // 'ziel',
            // 'ziel_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
