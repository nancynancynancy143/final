<?php

use yii\db\Migration;

/**
 * Handles the creation of table `buyer`.
 */
class m180524_023613_create_buyer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('buyer', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'asl' => $this->string()->notNull(),
            'address' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('buyer');
    }
}
