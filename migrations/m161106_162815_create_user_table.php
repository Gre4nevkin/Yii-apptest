<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m161106_162815_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id' => $this->primaryKey(),
                'password' => $this->string(64)->notNull(),           
                'email' => $this->string()->notNull(),           
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
