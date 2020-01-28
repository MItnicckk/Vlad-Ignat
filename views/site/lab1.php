<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>


<div class="alert alert-success">
    <h3>Заполните форму для заказа услуг</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h3>Форма</h3>
            <? $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'name')->label('Ваше имя')  ?>
            <?= $form->field($model, 'email')->label('Ваш email') ?>
            <?= $form->field($model, 'age')->label('Ваш возраст')->input('number') ?>
            <?= $form->field($model, 'date_visit')->label('Дата визита')->input('date') ?>
            <?= $form->field($model, 'favorite_cuisine')->label('Выберете курс')->dropDownList(['Русская' => 'Начинающий', 'Японская' => 'Знающий', 'Французкая' => 'Умелый']) ?>
            <?= $form->field($model, 'recomend')->label('Рекомендовали бы нас?')->radioList(['да' => 'Да','нет' =>'нет']) ?>
            <?= $form->field($model, 'text')->label('Ваш отзыв')->textarea(['rows' => 3]) ?>
            <?= Html::submitButton('Отправить',['class' => 'btn btn-success']) ?>
            <? $form = ActiveForm::end() ?>
        </div>
        <div class="col-lg-5">
            <? if (Yii::$app->session->hasFlash('success')): ?>
                <h3>Переданный отзыв</h3>
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Имя</th>
                            <th><?= Html::encode($model->name) ?></th>
                        </tr>
                        <tr>
                            <th>email</th>
                            <th><?= Html::encode($model->email) ?></th>
                        </tr>
                        <tr>
                            <th>Возраст</th>
                            <th><?= Html::encode($model->age) ?></th>
                        </tr>
                        <tr>
                            <th>Дата визита</th>
                            <th><?= Html::encode($model->date_visit) ?></th>
                        </tr>
                        <tr>
                            <th>Любимая кухня</th>
                            <th><?= Html::encode($model->favorite_cuisine) ?></th>
                        </tr>
                        <tr>
                            <th>Рекомендовали бы нас?</th>
                            <th><?= Html::encode($model->recomend) ?></th>
                        </tr>
                        <tr>
                            <th>Отзыв</th>
                            <th><?= Html::encode($model->text) ?></th>
                        </tr>
                    </tbody>
                </table>
            <? endif; ?>
        </div>
    </div>
</div>