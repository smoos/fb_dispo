<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FahrerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fahrers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fahrer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tag',
            'vorname',
            'nachname',
            'nickname',
            // 'klasse',
            // 'telefonnummer',
            // 'stuetzpunkt',
            // 'buero',
            // 'admin',
            // 'passwort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
