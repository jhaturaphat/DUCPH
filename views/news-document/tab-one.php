<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\models\NewsDocument;
use app\models\NewsDocumentSearch;
use yii\helpers\Html;
use yii\helpers\Url;


$dataProvider = new ActiveDataProvider([
    'query' => NewsDocument::find()->where(['news_type_id' => $id]),
    'pagination' => ['pageSize' => 5]
]);


?>

<?php
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '/news-document/_item',
        'layout' => '{items}',
    ]);
    ?>
    <br>
    <a href="<?= Url::to(['news-document/type', 'id'=>$id]); ?>" class="btn btn-info">อ่านทั้งหมด ...</a>
    



