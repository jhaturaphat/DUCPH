<?php

namespace app\modules\backend;

/**
 * admin module definition class
 */
class Doctor extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\backend\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::$app->assetManager->bundles['yii\\bootstrap4\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
        // custom initialization code goes here
    }
}
