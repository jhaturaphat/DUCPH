<?php

namespace app\controllers;

class RoomVipController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout3'; //สั่งให้ rander บน layout2.php ใน /views/layout/layout2.php       
        return $this->render('index');
    }

}
