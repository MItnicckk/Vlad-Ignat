<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\about */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create About', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '№',
            'text1:ntext',
            'text2:ntext',
            'text3:ntext',
            'text4:ntext',
            //'text5:ntext',
            //'text6:ntext',
            //'Name1',
            //'InfoName1:ntext',
            //'Name2',
            //'InfoName2:ntext',
            //'contact1',
            //'contact2',
            //'contact3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
