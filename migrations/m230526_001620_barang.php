<?php

use yii\db\Migration;

/**
 * Class m230526_001620_barang
 */
class m230526_001620_barang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%barang}}',[
            'id' => $this->primaryKey(),
            'kode_barang' => $this->string(15)->notNull()->unique(),
            'nama_barang' => $this->string(60)->notNull(),
            'harga' => $this->integer(10)->notNull(),
            'jumlah_stok' => $this->integer(20)->notNull(),
        ]);
    }
}
