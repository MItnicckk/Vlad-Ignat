<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\about */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '№') ?>

    <?= $form->field($model, 'text1') ?>

    <?= $form->field($model, 'text2') ?>

    <?= $form->field($model, 'text3') ?>

    <?= $form->field($model, 'text4') ?>

    <?php // echo $form->field($model, 'text5') ?>

    <?php // echo $form->field($model, 'text6') ?>

    <?php // echo $form->field($model, 'Name1') ?>

    <?php // echo $form->field($model, 'InfoName1') ?>

    <?php // echo $form->field($model, 'Name2') ?>

    <?php // echo $form->field($model, 'InfoName2') ?>

    <?php // echo $form->field($model, 'contact1') ?>

    <?php // echo $form->field($model, 'contact2') ?>

    <?php // echo $form->field($model, 'contact3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
