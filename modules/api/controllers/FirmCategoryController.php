<?php

namespace app\modules\api\controllers;

use Yii;
use app\modules\api\models\FirmCategory;
use app\modules\api\search\FirmCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FirmCategoryController implements the CRUD actions for FirmCategory model.
 */
class FirmCategoryController extends Controller
{
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
     * Lists all FirmCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FirmCategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FirmCategory model.
     * @param integer $firm_id
     * @param integer $category_id
     * @return mixed
     */
    public function actionView($firm_id, $category_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($firm_id, $category_id),
        ]);
    }

    /**
     * Creates a new FirmCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FirmCategory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'firm_id' => $model->firm_id, 'category_id' => $model->category_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FirmCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $firm_id
     * @param integer $category_id
     * @return mixed
     */
    public function actionUpdate($firm_id, $category_id)
    {
        $model = $this->findModel($firm_id, $category_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'firm_id' => $model->firm_id, 'category_id' => $model->category_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FirmCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $firm_id
     * @param integer $category_id
     * @return mixed
     */
    public function actionDelete($firm_id, $category_id)
    {
        $this->findModel($firm_id, $category_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FirmCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $firm_id
     * @param integer $category_id
     * @return FirmCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($firm_id, $category_id)
    {
        if (($model = FirmCategory::findOne(['firm_id' => $firm_id, 'category_id' => $category_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
