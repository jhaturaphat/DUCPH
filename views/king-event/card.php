<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\KingEvent;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KingEventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<?php 
    $model = new KingEvent();    
?>

<div class="king-event-index" style="background-color: #f9f9f9;">
<div class="head-content gold">
        กิจกรรมเฉลิมพระเกียรติ
</div>
    <div class="container">
    <div class="row ">
    <?php foreach($model::find()->asArray()->limit(4)->all() as $value){ ?>   
        <div class="col-md-3">
            <div class="text-center">
            <img class="img-thumbnail" src="<?= $model::getThumnail($value['folder_img'])[0] ?>" alt="">
            </div>
            <div>
                <span class="fas fa-calendar"></span>
                <span><?= $value['create_at'] ?></span>
            </div>            
            <h2><?= $value['title'] ?></h2>
            <p class="word-over"><?= $value['detail'] ?></p>
            <p>      
            <?= Html::a('อ่านต่อ »', ['king-event/view', 'id' => $value['id']], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
    <?php } ?>

    <div class="text-right col-md-12">        
        <?= Html::a('กิจกรรมทั้งหมด...', ['king-event/index'], ['class' => 'btn btn-info float-right']) ?>
    </div>
    </div>
    </div>
</div>
<br>
<?php
    $this->registerJs("        
    jQuery('.king-event-index').animateCss('fadeInRight');    
    ");
?>
