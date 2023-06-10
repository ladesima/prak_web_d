<?php

use yii\db\Migration;

/**
 * Class m230524_070307_program_studi
 */
class m230524_070307_program_studi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Program_Studi}}',[
            'id' => $this->primaryKey(),
            'universitas' => $this->string(60)->notNull(),
            'label_nim' => $this->string(12)->notNull()->unique(),
            'nama_resmi' => $this->string(50)->notNull(),
        ]);
    }
}