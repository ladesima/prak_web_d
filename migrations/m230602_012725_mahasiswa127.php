<?php

use yii\db\Migration;

/**
 * Class m230602_012725_mahasiswa127
 */
class m230602_012725_mahasiswa127 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa127}}', [
            'id_127' => $this->primaryKey(),
            'id_mhs_127' => $this->integer()->notNull(),
            'nim_127' => $this->string(12)->notNull(),
            'nama_127' => $this->string(60)->notNull(),
            'kelas_127' => $this->string(12)->notNull(),
            'status_127' => $this->string(60)->notNull(),
        ]);
    }

}
