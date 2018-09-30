<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use theme\widgets\Panel;
use theme\widgets\ActionButtons;

$this->title = 'سابقه تغییرات';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="changeLog-manage-index">
    <?= ActionButtons::widget([
        'buttons' => [
            'create' => ['label' => 'نسخه جدید'],
        ],
    ]); ?>
    <?php Panel::begin([
        'title' => Html::encode($this->title)
    ]) ?>
    <?php Pjax::begin([
        'id' => 'post-gridviewpjax',
        'enablePushState' => false,
    ]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'version',
            [
                'attribute' => 'date',
                'format' => 'date',
                'filter' => false
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    <?php Panel::end() ?>
</div>