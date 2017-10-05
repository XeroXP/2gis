<?php

namespace app\modules\v1\controllers;

use app\modules\gis\search\FirmSearch;
use yii\rest\ActiveController;
use yii\web\Response;
/**
 * Firm controller for the `v1` module
 */
class FirmController extends ActiveController
{

    public $modelClass = 'app\modules\gis\models\Firm';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }


    public function prepareDataProvider()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $search = new FirmSearch();
        return $search->search(\Yii::$app->request->getQueryParams());
    }

}
