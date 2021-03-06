<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\models\Doctor */

$this->title = 'แก้ไข แพทย์: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doctor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'docProfile' => $docProfile,
        'docHasBranch' => $docHasBranch,
        'docHasTimePeri' => $docHasTimePeri,
        'docHasWorkDate' => $docHasWorkDate
    ]) ?>

</div>
