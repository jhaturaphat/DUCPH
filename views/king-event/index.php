<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\KingEventSearch;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KingEventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<?php 
    $searchModel = new KingEventSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
?>
<div class="king-event-index">
<pre>
<?= print_r($dataProvider) ?>
</pre>
   
</div>
