<?php

namespace frontend\controllers;
use yii\rest\ActiveController;
class PoiController extends ActiveController
{
    public $modelClass = 'app\models\Poi';

    public function fields()
    {
        return [
            'id',
            'title'
        ];
    }
    public function checkAccess($action, $model = null, $params = [])
    {
        // check if the user can access $action and $model
        // throw ForbiddenHttpException if access should be denied
        if ($action === 'update' || $action === 'delete') {
            if (\Yii::$app->user->id ==null)
                throw new \yii\web\ForbiddenHttpException(sprintf('You can only %s articles that you\'ve created.', $action));
        }
    }
}
