<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_ref_jurusan}}`.
 */
class m230209_032042_create_table_ref_jurusan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_ref_jurusan}}', [
            'id' => $this->primaryKey(),
            'jurusan' => $this->string(15)
        ]);

        // $this->batchInsert(
        //     'ref_jurusan',
        //     [
        //         'jurusan',
        //     ],
        //     [
        //         ['IPA'],
        //         ['IPS'],
        //         ['UMUM']

        //     ]

        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_ref_jurusan}}');
    }
}
