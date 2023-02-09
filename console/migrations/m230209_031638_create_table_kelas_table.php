<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_kelas}}`.
 */
class m230209_031638_create_table_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_kelas}}', [
            'id' => $this->primaryKey(),
            'id_tahun_ajaran' => $this->tinyInteger(),
            'nama_kelas' => $this->string(255),
            'id_tingkat' => $this->tinyInteger(),
            'id_wali_kelas' => $this->tinyInteger(),
            'id_jurusan' => $this->tinyInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_kelas}}');
    }
}
