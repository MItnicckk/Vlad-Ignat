<?php

use yii\helpers\Html;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>
	<? foreach ($query2 as $val):?>
		<div class="jumbotron">
		<h3 class="display-4"><?= $val['text1'] ?></h3>
		</div>
	<? endforeach; ?>


	<? foreach ($query1 as $val):?>
		<div class="cardd">
			<div class="card-header">
			<?= $val['text1'] ?>
			</div>
				<div class="card-body">
				<p class="card-text"><?= $val['text2'] ?></p>
				<a href="files/<?= $val['text3'] ?>" target="_blank" class="btn btn-primary">Посмотреть документ</a>
				</div>
		</div>
		<br>
	<? endforeach; ?>


	<? foreach ($query2 as $val):?>
		<div class="jumbotron">
		<hr class="my-4">
		<p class="card-text"><small class="text-muted">Телефон:<a href="tel:<?= $val['contact1'] ?>"><?= $val['contact1'] ?></a></small></p>
		<p class="card-text"><small class="text-muted"><a href="tel:<?= $val['contact2'] ?>"><?= $val['contact2'] ?></a></small></p>
		<p class="card-text"><small class="text-muted">Наш электронный адрес:<?= $val['contact3'] ?></small></p>
		</div>
	<? endforeach; ?>