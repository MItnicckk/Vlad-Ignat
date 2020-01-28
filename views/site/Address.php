<?php
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
use yii\helpers\Html;
use voime\GoogleMaps\Map;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>


	<? foreach ($query1 as $val):?>
		<div class="jumbotron">
			<h3 class="display-4"><?= $val['text1'] ?></h3>
			<h5 class="lead"><?= $val['text2'] ?></h5>
			<p class="lead"><?= $val['text3'] ?></p>
		</div>
	<? endforeach; ?>

<div class="map_container">
	 	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7099175943726!2d41.14494421542442!3d44.96988777431108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f9ebbd6ca1ca2f%3A0x6bbebf143e7f8ae!2z0YPQuy4g0JrRgNC-0L_QvtGC0LrQuNC90LAsIDUwOCwg0JDRgNC80LDQstC40YAsINCa0YDQsNGB0L3QvtC00LDRgNGB0LrQuNC5INC60YDQsNC5LCAzNTI5MDM!5e0!3m2!1sru!2sru!4v1579943537617!5m2!1sru!2sru"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

	<? foreach ($query2 as $val):?>
		<div class="jumbotron">
			<hr class="my-4">
			<p class="card-text"><small class="text-muted">Телефон:<a href="tel:<?= $val['contact1'] ?>"><?= $val['contact1'] ?></a></small></p>
			<p class="card-text"><small class="text-muted"><a href="tel:<?= $val['contact2'] ?>"><?= $val['contact2'] ?></a></small></p>
			<p class="card-text"><small class="text-muted">Наш электронный адрес:<?= $val['contact3'] ?></small></p>
		</div>
	<? endforeach; ?>
<div class="row">
	<div class="col-xs-12 col-lg-12">

</div>
</div>

