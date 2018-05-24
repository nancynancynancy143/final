<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m180524_024613_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'shoes_id' => $this->integer()->notNull(),
            'location' => $this->text()->notNull(),
            'buyer_id' => $this->integer()->notNull()
   
       ]);
        $this->createIndex(
            'idx-company-shoes_id',
            'company','shoes_id'
        );

        $this->addForeignKey(
            'fk-company-shoes',
            'company','shoes_id',
            'shoes', 'id'
        );
        $this->createIndex(
            'idx-company-buyer_id',
            'company','buyer_id'
        );

        $this->addForeignKey(
            'fk-company-buyer',
            'company','buyer_id',
            'buyer', 'id'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-company-shoes', 'company');
        $this->dropIndex('idx-company-shoes_id','company');
        $this->dropTable('company');
    }
}