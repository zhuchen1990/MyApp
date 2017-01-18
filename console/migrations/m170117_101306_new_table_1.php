<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170117_101306_new_table_1 extends Migration
{
    public function up()
    {
       $this->createTable('new_table_1',[
           'id' => Schema::TYPE_BIGPK,
           'title' => Schema::TYPE_STRING . '(50) NOT NULL',
           'content' => Schema::TYPE_TEXT,
       ]);
    }

    public function down()
    {
        $this->dropTable('new_table_1');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
