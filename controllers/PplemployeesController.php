<?php

namespace app\controllers;

use Yii;
use app\models\PplEmployees;
use app\models\PplEmployeesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\PplemployeesComp;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * PplemployeesController implements the CRUD actions for PplEmployees model.
 */
class PplemployeesController extends Controller
{
public $layout = 'ums';
    /**
     * @inheritdoc
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
     * Lists all PplEmployees models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PplEmployeesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PplEmployees model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PplEmployees model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
  	public function actionCreate()
    {
        $model = new PplEmployees();
        $uploadform = new UploadForm();
        
        if ($model->load(Yii::$app->request->post())) {
            $uploadedfile = UploadedFile::getInstances($uploadform, 'employee_photo_img');
            if($uploadedfile){
                
                $model->employee_photo_img=$uploadedfile;
                $filename=$uploadform->upload();
                $model->filename=$filename;
            }
        	/* $pplcomp = new PplemployeesComp();
        	if($pplcomp->create($model)){
        		return $this->redirect(['view', 'id' => $model->sys_employee_id]);
        	} */
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PplEmployees model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->sys_employee_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PplEmployees model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PplEmployees model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PplEmployees the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PplEmployees::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
