<?php

namespace app\modules\v1\controllers;

use app\modules\gis\search\FirmSearch;
use yii\rest\ActiveController;

/**
 * Firm controller for the `v1` module
 */
class FirmController extends ActiveController
{

    public $modelClass = 'app\modules\gis\models\Firm';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }


    public function prepareDataProvider()
    {
        $search = new FirmSearch();
        return $search->search(\Yii::$app->request->getQueryParams());
    }

}
