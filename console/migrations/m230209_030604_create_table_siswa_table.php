<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_siswa}}`.
 */
class m230209_030604_create_table_siswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_siswa}}', [
            'id' => $this->primaryKey(),
            'nis' => $this->string(18),
            'nama' => $this->string(255),
            'tempat_lahir' => $this->string(100),
            'tanggal_lahir' => $this->date(),
            'alamat' => $this->text(),
            'id_kelas' => $this->tinyInteger(),
            'id_user' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_siswa}}');
    }
}
