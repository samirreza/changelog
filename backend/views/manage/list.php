<?php
use yii\widgets\ListView;
?>
<div class="post-index">
    <?php echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_changes',
        'layout' => "{items}\n{pager}"
    ]); ?>
</div>