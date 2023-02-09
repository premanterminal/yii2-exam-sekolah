<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_guru}}`.
 */
class m230209_030618_create_table_guru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_guru}}', [
            'id' => $this->primaryKey(),
            'nama_guru' => $this->string(255),
            'id_user' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_guru}}');
    }
}
