<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `user`.
 */
class m161106_162634_drop_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('user');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
        ]);
    }
}
