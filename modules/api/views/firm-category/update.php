<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\api\models\FirmCategory */

$this->title = 'Update Firm Category: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Firm Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firm_id, 'url' => ['view', 'firm_id' => $model->firm_id, 'category_id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="firm-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
