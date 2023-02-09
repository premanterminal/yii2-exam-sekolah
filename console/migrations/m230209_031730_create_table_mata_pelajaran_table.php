<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_mata_pelajaran}}`.
 */
class m230209_031730_create_table_mata_pelajaran_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_mata_pelajaran}}', [
            'id_guru' => $this->tinyInteger(),
            'id_mata_pelajaran' => $this->tinyInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_mata_pelajaran}}');
    }
}
