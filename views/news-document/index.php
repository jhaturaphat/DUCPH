<?php
/* @var $this yii\web\View */
use kartik\tabs\TabsX;
use app\models\NewsType;
?>

<div class="head-content pink">
 ข่าวประชาสัมพันธ์ 
</div>

<?php
$tabs = array();
// $this->render('@app/views/hosxp-dashboard/dashboard') 
foreach(NewsType::findAll(['active'=>'YES']) as $item){
    $tab['label'] = $item['name'];
    $tab['content'] = $this->render('tab-one',[
        'id' => $item['id']
        ]);
    array_push($tabs,$tab);
}

//print_r($tabs);
?>
<div class="container">
   
<div class="panel panel-default">    
        <div class="panel-body">  
            <?php
            echo TabsX::widget([
                'items'=>$tabs,
                'position'=>TabsX::POS_ABOVE,
                'bordered'=>true,
                'encodeLabels'=>false
            ]);?>
        </div>
</div>
 
</div>

<br>