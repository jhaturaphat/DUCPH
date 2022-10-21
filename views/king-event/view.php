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
$dir = $model->folder_img;
$root = scandir($dir);
        foreach($root as $value)
        {
            if($value === '.' || $value === '..') {continue;}
            if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;}
            foreach(find_all_files("$dir/$value") as $value)
            {
                $result[]=$value;
            }
        }
echo '<div class="container">';
echo '<div id="my-light-boox" class="row no-gutters">';
foreach($result as $files)
   {   
        echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a data-lightbox="mygallery" href="'.Yii::getAlias('@web/').$files.'">
        <img src="'.Yii::getAlias('@web/').$files.'" class="art img-fluid">
        </a>
        </div>';
    }

?> 
<?php
echo '</div>';
echo '</div>';
