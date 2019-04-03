<?php

use yii\db\Migration;

/**
 * Class m190403_132155_add_is_admin_to_user_table
 */
class m190403_132155_add_is_admin_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->addColumn('user', 'is_admin', $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropColumn('user', 'is_admin');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190403_132155_add_is_admin_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
