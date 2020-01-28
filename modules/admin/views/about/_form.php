<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Name1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InfoName1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Name2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InfoName2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contact1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
