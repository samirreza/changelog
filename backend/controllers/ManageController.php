<?php

namespace modules\changelog\backend\controllers;

use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use core\controllers\AdminController;
use modules\changelog\backend\models\ChangeLog;
use modules\changelog\backend\models\ChangeLogSearch;

class ManageController extends AdminController
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['superuser'],
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
        $dataProvider = new ActiveDataProvider([
            'query' => ChangeLog::find()->addOrderBy('createdAt DESC'),
        ]);
        return $this->render('list', [
            'dataProvider' => $dataProvider,
        ]);
    }
}