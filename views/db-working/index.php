<?php
    use yii\helpers\Html;
    use yii\bootstrap\Modal;
    use yii\widgets\ActiveForm;
    $js = <<<JS
        $('.cross').on('click',function() {
          var data_id = $(this).parent().children().eq(0).attr('data-id');
          $.ajax({
            url: 'web/index.php?r=db-working/index',
            data: data_id,
            type: 'POST',
            success:function(data) {
              alert(data);
            },
            error:function() {
              alert("ошибка");
            },
          });
        })
JS;
    $this->registerJs($js);
?>



<div class="alert alert-success">
<!--    --><?//= Html::encode($header) ?>
    <button class="btn btn-success"onclick="location.href = '/db-working/query'">Запросы</button>
</div>

