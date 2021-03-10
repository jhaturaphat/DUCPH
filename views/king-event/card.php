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

<div class="king-event-index">
<div class="content-head">
        <h1>กิจกรรมเฉลิมพระเกียรติ</h1>
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
            <p><?= substr($value['detail'],0, 1000) ?></p>
            <p>            
            <a class="btn btn-secondary" href="#" role="button">อ่านต่อ »</a>
            </p>
        </div>
    <?php } ?>

    <div class="text-center">
        <button class="btn btn-primary">อ่านทั้งหมด...</button>
    </div>

    </div>
    </div>
</div>
