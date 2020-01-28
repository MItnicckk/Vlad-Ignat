<?php

use yii\helpers\Html;
?>

<div class="admin-default-index">
    <h1>Админу бобра!</h1>
    <p>
        Тут вы можете редактировать записи!
    </p>
    <p>
    <div calss="wrap">
        <div class="container">
                <li role="presentation" class="active"><?= html::a('Новости',['.../News/index.php']) ?></li>
                <li role="presentation" class="active"><?= html::a('Военный округ',['News/index']) ?></li>
        </ul>
            <?= $content ?>

        </div>
    </div>
    </p>

</div>
