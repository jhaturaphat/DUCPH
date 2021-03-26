<?php
/* @var $this yii\web\View */
use kartik\tabs\TabsX;
use app\models\NewsType;
?>

<div class="head-content pink">
<img src="<?= Yii::getAlias('@web') ?>/img/icon-system/forbidden.png" class="icon" >  
 ข่าวประชาสัมพันธ์ 
</div>

<?php
$tabs = array();

foreach(NewsType::findAll(['active'=>'YES']) as $item){
    $tab['label'] = '<i class="fas fa-volume-up"></i>  '.$item['name'];
    $tab['content'] = $this->render('tab-one',['id' => $item['id']]);
    array_push($tabs,$tab);
}


?>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">    
            <div class="panel-body">  
                <?php
                echo TabsX::widget([
                    'items'=>$tabs,
                    'position'=>TabsX::POS_ABOVE,
                    'align' => TabsX::ALIGN_LEFT,
                    'bordered'=>true,
                    'encodeLabels'=>false,
                    'fade' => true,
                ]);?>
            </div>
        </div>
    </div>
    <!-- End col-6-->
    <div class="col-md-6">
        <img src="<?=Yii::getAlias('@web').'/documents/news-document/2564/images/สวมหน้ากาก.jpg' ?>" class="img-fluid" alt="Responsive image">
    </div> 
    <!-- End col-6 -->
</div>
   
</div>

<br>