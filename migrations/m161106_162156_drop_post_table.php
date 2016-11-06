<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `post`.
 */
class m161106_162156_drop_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('post');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
        ]);
    }
}
