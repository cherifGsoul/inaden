<?php

use yii\db\Schema;
use yii\db\Migration;

class m151021_131037_init_tables extends Migration
{
    public function safeUp()
    {
        $this->createTable('node', [
            'id' => $this->primaryKey(),
            'guid'=>$this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
            'type'=>$this->text()->notNull(),
            'author_id'=>$this->integer(),
            'update_author'=>$this->integer(),
            'lft'=>$this->integer()->notNull(),
            'rgt'=>$this->integer()->notNull(),
            'root'=>$this->integer()->notNull(),
            'depth'=>$this->integer()->notNull(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),

        ]);

        $this->createTable('taxonomy',[
            'id' => $this->primaryKey(),
            'guid'=>$this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'type'=>$this->text()->notNull(),
            'lft'=>$this->integer()->notNull(),
            'rgt'=>$this->integer()->notNull(),
            'root'=>$this->integer()->notNull(),
            'depth'=>$this->integer()->notNull(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
            'created_by'=>$this->integer(),
            'update_by'=>$this->integer(),
        ]);
    }

    public function safeDown()
    {
    }
}
