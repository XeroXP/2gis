<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\api\models\FirmCategory */

$this->title = $model->firm_id;
$this->params['breadcrumbs'][] = ['label' => 'Firm Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'firm_id' => $model->firm_id, 'category_id' => $model->category_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'firm_id' => $model->firm_id, 'category_id' => $model->category_id], [
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
            'firm_id',
            'category_id',
        ],
    ]) ?>

</div>
