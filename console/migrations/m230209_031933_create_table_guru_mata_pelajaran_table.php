<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_guru_mata_pelajaran}}`.
 */
class m230209_031933_create_table_guru_mata_pelajaran_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_guru_mata_pelajaran}}', [
            // 'id' => $this->primaryKey(),
            'id_guru' => $this->tinyInteger(),
            'id_mata_pelajaran' => $this->tinyInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_guru_mata_pelajaran}}');
    }
}
