<?php

use yii\db\Migration;

class m090819_131821_add_date_column_to_changelog extends Migration
{
    public function up()
    {
        $this->addColumn('change_log', 'date', $this->integer()->notNull());
    }

    public function down()
    {
        $this->dropColumn('change_log', 'date');
    }
}