<?php
    use yii\helpers\Html;
    use yii\bootstrap\Modal;
    use yii\widgets\ActiveForm;
    use yii\data\Pagination;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>
<style> 
p {
  text-indent: 20px;
}
</style>


<?php if(!empty($posts)):?>
<div class="card">
	<?php foreach ($posts as $val):?>
  <div class="card-body">
  	<p class="card-text"><small class="text-muted"><?= $val->Date ?></small></p>
   <h3><div class="alert alert-info"><?= $val->Headline ?></div></h3>
    <p class="card-text"><?= $val->Text1 ?></p>
    <br>
    <h4 class="card-text"><?= $val->Litle ?></h4>
    <p class="card-text"><img src="slider/1Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="1"><?= $val->L1place ?></p>
    <p class="card-text"><img src="slider/2Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="2"><?= $val->L2place ?></p>
    <p class="card-text"><img src="slider/3Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="3"><?= $val->L3place ?></p>
    <br>
    <h4 class="card-text"><?= $val->Average ?></h4>
    <p class="card-text"><img src="slider/1Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="1"><?= $val->A1place ?></p>
    <p class="card-text"><img src="slider/2Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="2"><?= $val->A2place ?></p>
    <p class="card-text"><img src="slider/3Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="3"><?= $val->A3place ?></p>
    <br>
    <h4 class="card-text"><?= $val->Big ?></h4>
    <p class="card-text"><img src="slider/1Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="1"><?= $val->B1place ?></p>
    <p class="card-text"><img src="slider/2Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="2"><?= $val->B2place ?></p>
    <p class="card-text"><img src="slider/3Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="3"><?= $val->B3place ?></p>
    <br>
    <p class="card-text" text-indent="10px"><?= $val->Text2 ?></p>
    <p class="card-text"><?= $val->Text3 ?></p>
    <br>
    <p class="card-text"><img src="slider/1Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="1"><?= $val->T1place ?></p>
    <p class="card-text"><img src="slider/2Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="2"><?= $val->T2place ?></p>
    <p class="card-text"><img src="slider/3Place.jpg" width="20px" height="33px" alt="Place"><img src="slider/jj.jpg" width="15px" height="1px" alt="3"><?= $val->T3place ?></p>
    <br>
    <p class="card-text"><?= $val->Text4 ?></p>
  </div>
  <br>
  <img src="CardImg/<?= $val->Images ?>" width="500px" height="330px" class="card-img-top" alt="Фото">
  <? endforeach; ?>
</div>
 <? endif; ?>

<?php
use yii\widgets\LinkPager;

echo LinkPager::widget([
    'pagination' => $pages,
]);
?>