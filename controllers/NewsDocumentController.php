<?php

namespace app\controllers;

use Yii;
use app\models\NewsType;
use app\models\NewsDocument;
use app\models\NewsDocumentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsDocumentController implements the CRUD actions for NewsDocument model.
 */
class NewsDocumentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all NewsDocument models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'layout2'; //สั่งให้ rander บน layout2.php ใน /views/layout/layout2.php        
        $searchModel = new NewsDocumentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all NewsDocument models.
     * @return mixed
     */
    public function actionType($id)
    {        
        $this->layout = 'layout2'; //สั่งให้ rander บน layout2.php ใน /views/layout/layout2.php        
        $searchModel = new NewsDocumentSearch();
        $dataProvider = $searchModel->searchType($id);
        $dataProvider->sort = ['defaultOrder' => ['create_at'=>SORT_DESC]];                
        return $this->render('type', [
            'model' => NewsType::findOne(['id'=>$id]),
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NewsDocument model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NewsDocument model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NewsDocument();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    
    public function actionDownload($id){

        $model = $this->findModel($id);
        if (file_exists($model->path)) {
            return Yii::$app->response->xSendFile($model->path);            
        } else {
            throw new \yii\web\NotFoundHttpException("{$file} หาไฟล์ไม่พบ!");
        }
    }


    /**
     * Finds the NewsDocument model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NewsDocument the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NewsDocument::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
