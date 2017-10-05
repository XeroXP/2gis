<?php

namespace app\modules\v1\controllers;

use app\modules\gis\search\BuildingSearch;
use yii\rest\ActiveController;

/**
 * Building controller for the `v1` module
 */
class BuildingController extends ActiveController
{

    public $modelClass = 'app\modules\gis\models\Building';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $search = new BuildingSearch();
        return $search->search(\Yii::$app->request->getQueryParams());
    }

}
