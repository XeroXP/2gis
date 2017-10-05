<?php

namespace app\modules\v1\controllers;

use app\modules\gis\search\Category;
use yii\rest\ActiveController;

/**
 * Category controller for the `v1` module
 */
class CategoryController extends ActiveController
{

    public $modelClass = 'app\modules\gis\models\Category';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $search = new Category();
        return $search->search(\Yii::$app->request->getQueryParams());
    }
}
