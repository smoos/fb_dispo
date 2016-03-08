<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ort */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ort-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kurz:ntext',
            'name:ntext',
            'zusatz:ntext',
            'zweitname:ntext',
            'hinweis:ntext',
            'strasse:ntext',
            'plz:ntext',
            'stadt:ntext',
            'stadtteil:ntext',
            'stadtplannr:ntext',
            'stadtplanko:ntext',
            'parkplatzbeschreibung:ntext',
            'lageplan_dateiname:ntext',
        ],
    ]) ?>

</div>
