<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_siswa_rw_kelas}}`.
 */
class m230209_031832_create_table_siswa_rw_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_siswa_rw_kelas}}', [
            'id' => $this->primaryKey(),
            'id_siswa' => $this->tinyInteger(),
            'id_kelas' => $this->tinyInteger(),
            'id_tahun_ajaran' => $this->tinyInteger(),
            'nama_kelas' => $this->string(50),
            'id_tingkat' => $this->tinyInteger(),
            'id_wali_kelas' => $this->tinyInteger()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_siswa_rw_kelas}}');
    }
}
