<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-document-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'path',
            'title',
            'detail:ntext',
            'create_at',
            //'update_at',
            //'news_type_id',
            //'public',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{download}',                
                'contentOptions'=>[
                    'noWrap' => true
                ],
                'buttons' => [
                    'download' =>  function($url,$model) {
                        return Html::a('<i class="fa fa-download"></i> ดาวน์โหลด',['news-document/download','id'=>$model->id],['class'=>'text-info']);
                    }
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
