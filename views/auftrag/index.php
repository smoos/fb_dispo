<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuftragSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auftrags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auftrag-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Auftrag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gruppe_auftrag',
            'auftraggeber_name',
            'auftraggeber_abteilung',
            'auftraggeber_telefon',
            // 'anfahrtszeit_min',
            // 'start',
            // 'ziel',
            // 'start_ort',
            // 'start_name',
            // 'start_telefon',
            // 'ziel_ort',
            // 'ziel_name',
            // 'ziel_telefon',
            // 'ladung',
            // 'fahrzeugtyp',
            // 'nachfrage_fahrer',
            // 'nachfrage',
            // 'rueckmeldung_fahrer',
            // 'rueckmeldung',
            // 'angelegt',
            // 'angelegt_fahrer',
            // 'stuetzpunkt',
            // 'last_update',
            // 'last_update_fahrer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
