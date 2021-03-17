<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


app\assets\AppAssetLightbox::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\KingEvent */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'King Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="king-event-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron">   
        <p><?= $model->detail ?></p>
        
    </div>
</div>


<?php 
//'.Yii::getAlias('@web').$model->folder_img.$imgName.'
$imgFiles = \yii\helpers\FileHelper::findFiles(Yii::getAlias('@web').str_replace("/" , "\\" ,$model->folder_img) ,['only'=>['*.*']]);
echo '<div class="container">';
echo '<div id="my-light-boox" class="row no-gutters">';
foreach($imgFiles as $files)
   {
        $explodeImg = explode('\\', $files);
        $imgName = end($explodeImg);
        echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a data-lightbox="mygallery" href="'.Yii::getAlias('@web').$model->folder_img.$imgName.'">
        <img src="'.Yii::getAlias('@web').$model->folder_img.$imgName.'" class="art img-fluid">
        </a>
        </div>';
    }

    

?> 
<?php
echo '</div>';
echo '</div>';
