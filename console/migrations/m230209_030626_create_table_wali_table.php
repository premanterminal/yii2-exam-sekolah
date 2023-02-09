<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_wali}}`.
 */
class m230209_030626_create_table_wali_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_wali}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(255),
            'alamat' => $this->text(),
            'no_hp' => $this->string(16),
            'id_status_wali' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_wali}}');
    }
}
