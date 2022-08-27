<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="media">
  <div class="media-left">
      <img class="media-object" src="<?=Yii::getAlias('@web').'/img/icon-system/logo.ico' ?>" style="width: 40px;" alt="...">
  </div>
  <div class="media-body ">
    <a href="<?= Url::to(['/news-document/view', 'id'=>$model->id]); ?>" style="text-decoration: none;">
      <h5 class="mt-0 mb-1 font-weight-light"><?php echo $model->title; ?> </h5>
    </a>    
    <small class="text-muted">
        <i class="fa fa-clock-o"></i> <?php echo $model->create_at; ?>   
        <?= Html::a('<i class="fa fa-download"></i> ดาวน์โหลด',['news-document/download','id'=>$model->id],['class'=>'text-info']) ?>
    </small>
  </div>
  <p />
</div>
<hr>