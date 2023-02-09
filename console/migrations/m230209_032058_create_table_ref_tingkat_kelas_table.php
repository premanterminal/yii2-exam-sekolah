<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_ref_tingkat_kelas}}`.
 */
class m230209_032058_create_table_ref_tingkat_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_ref_tingkat_kelas}}', [
            'id' => $this->primaryKey(),
            'tingkat_kelas' => $this->string(3)
        ]);

        // $this->batchInsert(
        //     'ref_tingkat_kelas',
        //     [
        //         'tingkat_kelas',
        //     ],
        //     [
        //         ['X'],
        //         ['XI'],
        //         ['XII']

        //     ]

        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_ref_tingkat_kelas}}');
    }
}
