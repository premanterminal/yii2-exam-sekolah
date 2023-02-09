<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_ref_status_wali}}`.
 */
class m230209_031759_create_table_ref_status_wali_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_ref_status_wali}}', [
            'id' => $this->primaryKey(),
            'status_wali' => $this->string(10)
        ]);

        // $this->batchInsert(
        //     'ref_status_wali',
        //     [
        //         'status_wali',
        //     ],
        //     [
        //         ['Ayah'],
        //         ['Ibu'],
        //         ['Keluarga']
        //     ]

        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_ref_status_wali}}');
    }
}
