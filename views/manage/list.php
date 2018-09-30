<?php

use yii\widgets\ListView;

$this->title = 'سابقه تغییرات';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="x_panel">
    <div class="x_content">
        <div class="dashboard-widget-content">
            <ul class="list-unstyled timeline widget">
                <li>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_changes',
                        'layout' => "{items}\n{pager}"
                    ]) ?>
                </li>
            </ul>
        </div>
    </div>
</div>
