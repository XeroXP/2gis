<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\api\models\FirmCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firm-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firm_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
