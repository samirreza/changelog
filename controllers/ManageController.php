<?php

namespace modules\changelog\controllers;

use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use modules\changelog\models\ChangeLog;
use core\controllers\AjaxAdminController;
use modules\changelog\models\ChangeLogSearch;

class ManageController extends AjaxAdminController
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['superuser']
                        ]
                    ]
                ]
            ]
        );
    }

    public function init()
    {
        $this->modelClass = ChangeLog::className();
        $this->searchClass = ChangeLogSearch::className();
        parent::init();
    }

    public function actionList()
    {
        $lastUpdates = ChangeLog::find()->orderBy(['date' => SORT_DESC])->all();
        return $this->render('list', [
            'lastUpdates' => $lastUpdates
        ]);
    }
}
