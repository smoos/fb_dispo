<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FahrzeugtypSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fahrzeugtyps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrzeugtyp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fahrzeugtyp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bezeichner',
            'plaetze',
            'klasse',
            'zuladung_kg',
            // 'laderaum_ltr',
            // 'dimension_cm',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
