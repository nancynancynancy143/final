<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shoes`.
 */
class m180524_021802_create_shoes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this->createTable('shoes', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'amount' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shoes');
    }
}
