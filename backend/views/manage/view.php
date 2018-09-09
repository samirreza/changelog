<?php

use yii\widgets\DetailView;
use themes\admin360\widgets\Panel;
use themes\admin360\widgets\ActionButtons;

$this->title = $model->version;
$this->params['breadcrumbs'][] = ['label' => 'سابقه تغییرات', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="changeLog-manage-view">
    <?= ActionButtons::widget([
        'modelID' => $model->id,
        'buttons' => [
            'update' => ['label' => 'ویرایش'],
            'delete' => ['label' => 'حذف'],
            'create' => ['label' => 'نسخه جدید'],
            'index' => ['label' => 'سابقه تغییرات'],
        ],
    ]); ?>
    <div class="row">
        <div class="col-md-7">
            <?php Panel::begin([
                'title' => 'تغییرات سیستم',
            ]) ?>
            <div class="well">
                <?= $model->description ?>
            </div>
            <?php Panel::end() ?>
        </div>
        <div class="col-md-5">
            <?php Panel::begin([
                'title' => 'سایر اطلاعات',
            ]) ?>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id:farsiNumber',
                    'version',
                    'createdAt:date',
                ],
            ]) ?>
            <?php Panel::end() ?>
        </div>
    </div>
</div>