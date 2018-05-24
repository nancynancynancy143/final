<?php

use yii\db\Migration;

/**
 * Class m180524_052930_add_name_to_company_table
 */
class m180524_052930_add_name_to_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->addColumn('company','name','string(60) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
$this->dropColumn('company','name');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180524_052930_add_name_to_company_table cannot be reverted.\n";

        return false;
    }
    */
}
