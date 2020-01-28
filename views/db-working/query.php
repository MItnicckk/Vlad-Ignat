<?php
    use yii\helpers\Html;
    use yii\bootstrap\Modal;
    use yii\widgets\ActiveForm;
    use yii\data\Pagination;
?>
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<link href="carousel.css" rel="stylesheet">
<br>

<?php if(!empty($posts)):?>
    <div class="row featurette">
      <?php foreach ($posts as $val):?>
          <div class="col-md-7">
            <h2 class="featurette-heading"><?= $val->Title ?></h2>
            <p class="lead"><?= $val->Description ?></p>
          </div>
            <div class="col-md-5">
            <div class="photo-container">
              <img src="/img/<?= $val->Img ?>" alt="Фото">
            </div>
          </div>
      <? endforeach; ?>
    </div>
<? endif; ?>

<?php
use yii\widgets\LinkPager;

echo LinkPager::widget([
    'pagination' => $pages,
]);



