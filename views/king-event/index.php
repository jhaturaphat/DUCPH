<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\KingEvent;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KingEventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCssFile("@web/css/index/site.css");

?>

<?php 
    $model = new KingEvent();    
?>

<div class="king-event-index" id="king-event">
<div class="head-content">
        กิจกรรมเฉลิมพระเกียรติ
</div>
    <div class="container">
    <div class="row king">
    <?php foreach($model::find()->asArray()->all() as $value){ ?>   
        <div class="col-md-3 ">
            <div class="text-center">
            <img class="img-thumbnail" src="<?= $model::getThumnail($value['folder_img'])[0] ?>" alt="">
            </div>
            <div class="xxxx">
                <span class="fas fa-calendar"></span>
                <span><?= $value['create_at'] ?></span>
            </div>            
            <h2><?= $value['title'] ?></h2>
            <p class="word-over"><?= $value['detail'] ?></p>
            <p>      
            <?= Html::a('อ่านต่อ »', ['king-event/view', 'id' => $value['id']], ['class' => 'btn btn-secondary']) ?>
            </p>
        </div>
    <?php } ?>
    </div>
    </div>
</div>


