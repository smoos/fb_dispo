<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ort-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ort', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kurz:ntext',
            'name:ntext',
            'zusatz:ntext',
            'zweitname:ntext',
            // 'hinweis:ntext',
            // 'strasse:ntext',
            // 'plz:ntext',
            // 'stadt:ntext',
            // 'stadtteil:ntext',
            // 'stadtplannr:ntext',
            // 'stadtplanko:ntext',
            // 'parkplatzbeschreibung:ntext',
            // 'lageplan_dateiname:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
