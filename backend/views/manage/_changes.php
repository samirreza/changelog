<?php
$this->title = 'تاریخچه تغییرات';
?>
<div class="block">
    <div class="block_content">
        <h2 class="title">
            <a> نسخه : <?php echo $model->version; ?></a>
        </h2>
        <div class="byline">
            <span><?php echo Yii::$app->formatter->asDate($model->updatedAt); ?></span>
        </div>
        <p class="excerpt"><?php echo $model->description; ?></p>
    </div>
</div>
