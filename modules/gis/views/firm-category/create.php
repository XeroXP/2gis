<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\api\models\FirmCategory */

$this->title = 'Create Firm Category';
$this->params['breadcrumbs'][] = ['label' => 'Firm Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
