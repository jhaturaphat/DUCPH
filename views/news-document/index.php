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
    <div class="col-md-6 img-box">     
    <a href="javascript:void(0)" aria-hidden="true" onclick=" return show_job_image()">
    <img src="<?=Yii::getAlias('@web').'/documents/news-document/2564/images/สวมหน้ากาก.jpg' ?>" class="img-fluid" alt="Responsive image">
    </a>   
    <!-- lightbox container hidden with CSS -->
    <a href="javascript:void(0)" onclick="return lightbox_x()" class="lightbox" id="img1">
    <span style="background-image: url('<?=Yii::getAlias('@web').'/documents/news-document/2564/images/สวมหน้ากาก.jpg' ?>')"></span>
    </a>
                 
    </div> 
    <!-- End col-6 -->
</div>
   
</div>

<br>
<?php
    $this->registerJs("    
    jQuery('.img-fluid').animateCss('fadeInRight');    
    jQuery('.panel-default').animateCss('fadeInLeft');    
    ");
?>

<script>
function lightbox_x(){
    var ele = document.getElementById("img1");
    ele.style.display = "none";
} 
function show_job_image(){
    var ele = document.getElementById("img1");
    ele.style.display = "block";
}   
</script>

<style>
.img-box img {
  max-height: 50vh;
}
.lightbox {
  /* Default to hidden */
  display: none;

  /* Overlay entire screen */
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  
  /* A bit of padding around image */
  padding: 1em;

  /* Translucent background */
  background: rgba(0, 0, 0, 0.8);
  
}

/* Unhide the lightbox when it's the target */
.lightbox:target {
  display: block;
}

.lightbox span {
  /* Full width and height */
  display: block;
  width: 100%;
  height: 100%;

  /* Size and position background image */
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}
</style>