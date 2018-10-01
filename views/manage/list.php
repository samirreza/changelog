<?php

use modules\changelog\widgets\updateBox\UpdateBox;

$this->title = 'تاریخچه تغییرات';
$this->params['breadcrumbs'][] = $this->title;

?>

<?=
UpdateBox::widget([
    'lastUpdate' => $lastUpdates,
    'showLink' => false,
    'visible' => Yii::$app->user->can('superuser')
])
?>