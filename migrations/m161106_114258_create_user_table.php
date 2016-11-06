<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m161106_114258_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'password' => 'string NOT NULL',
            'email' => 'string NOT NULL'
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
