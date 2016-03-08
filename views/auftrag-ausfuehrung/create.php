<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuftragAusfuehrung */

$this->title = 'Create Auftrag Ausfuehrung';
$this->params['breadcrumbs'][] = ['label' => 'Auftrag Ausfuehrungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auftrag-ausfuehrung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
