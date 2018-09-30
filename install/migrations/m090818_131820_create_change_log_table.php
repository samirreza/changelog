<?php

use yii\db\Migration;

class m090818_131820_create_change_log_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('change_log', [
            'id' => $this->primaryKey(),
            'version' => $this->string()->notNull(),
            'description' => $this->text()->notNull()
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('change_log');
    }
}
