<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_siswa_wali}}`.
 */
class m230209_032000_create_table_siswa_wali_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_siswa_wali}}', [
            // 'id' => $this->primaryKey(),
            'id_siswa' => $this->tinyInteger(),
            'id_wali' => $this->tinyInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_siswa_wali}}');
    }
}
