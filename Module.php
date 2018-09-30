<?php

namespace modules\changelog;

class Module extends \yii\base\Module
{
	public $title;
    public $menu;
	public $defaultRoute = 'manage/index';
    public $controllerNamespace = 'modules\changelog\controllers';
    public $editableSlug = false;

    public function init()
    {
        parent::init();
        \Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}