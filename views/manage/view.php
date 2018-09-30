<?php

use yii\widgets\DetailView;
use theme\widgets\Panel;
use theme\widgets\ActionButtons;

$this->title = $model->version;
$this->params['breadcrumbs'][] = ['label' => 'سابقه تغییرات', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="changeLog-view">
    <div class="row">
        <?php Panel::begin([
            'title' => 'تغییرات سیستم',
            'showCloseButton' => true
        ]) ?>
        <div class="col-md-6">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id:farsiNumber',
                    'version',
                    'date:date',
                ],
            ]) ?>
        </div>
        <div class="col-md-6">
            <div class="well">
                <?= $model->description ?>
            </div>
        </div>
        <?php Panel::end() ?>
    </div>
</div>