<?php
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>

    <? foreach ($query as $val):?>
        <div class="jumbotron">
            <h3 class="display-4"><?= $val['text1'] ?></h3>
            <h5 class="lead"><?= $val['text2'] ?></h5>
            <p class="lead"><?= $val['text3'] ?></p>
            <p class="lead"><?= $val['text4'] ?></p>
            <p class="lead"><?= $val['text5'] ?></p>
            <p class="lead"><?= $val['text6'] ?></p>
    <? endforeach; ?>

    <? foreach ($query as $val):?>
            <p class="lead">Учредитель:<a data-toggle="popover" data-placement="top" data-content="<?= $val['InfoName1'] ?>"><?= $val['Name1'] ?></a></p>
    <? endforeach; ?> 

            <p class="lead">Организацию возглавляет:
                <? foreach ($query as $val):?>
                    <a data-toggle="popover"  data-placement="top" data-content="<?= $val['InfoName2'] ?>">
                        <?= $val['Name2'] ?>
                    </a>
                    <br>
                <? endforeach; ?>
            </p>

            <hr class="my-4">
            
            <p class="card-text">
                <small class="text-muted">Телефон:
                    <? foreach ($query as $val):?>
                        <a href="tel:<?= $val['contact1'] ?>">
                            <?= $val['contact1'] ?>
                        </a>
                    <? endforeach; ?>
                </small>
            </p>

            <p class="card-text">
                <small class="text-muted">
                    <? foreach ($query as $val):?>
                        <a href="tel:<?= $val['contact2'] ?>">
                            <?= $val['contact2'] ?>
                        </a>
                    <? endforeach; ?>
                </small>
            </p>

            <p class="card-text">
                <small class="text-muted">Наш электронный адрес:
                    <? foreach ($query as $val):?>
                        <?= $val['contact3'] ?>
                    <? endforeach; ?>
                </small>
            </p>
            
       </div>
