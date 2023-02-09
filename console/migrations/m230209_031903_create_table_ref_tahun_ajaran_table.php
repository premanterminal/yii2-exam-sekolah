<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_ref_tahun_ajaran}}`.
 */
class m230209_031903_create_table_ref_tahun_ajaran_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_ref_tahun_ajaran}}', [
            'id' => $this->primaryKey(),
            'tahun_ajaran' => $this->string(9)
        ]);
        // $this->batchInsert(
        //     'ref_tahun_ajaran',
        //     [
        //         'tahun_ajaran',
        //     ],
        //     [
        //         ['2022/2023'],
        //         ['2023/2024'],

        //     ]

        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_ref_tahun_ajaran}}');
    }
}
