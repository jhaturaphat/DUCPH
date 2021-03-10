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
<pre>
<?= print_r($model::find()->asArray()->all() )?>
</pre>
   
</div>
