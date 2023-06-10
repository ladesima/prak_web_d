<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "program_studi".
 *
 * @property int $id
 * @property string $universitas
 * @property string $label_nim
 * @property string $nama_resmi
 */
class ProgramStudi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program_studi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['universitas', 'label_nim', 'nama_resmi'], 'required'],
            [['universitas'], 'string', 'max' => 60],
            [['label_nim'], 'string', 'max' => 12],
            [['nama_resmi'], 'string', 'max' => 50],
            [['label_nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'universitas' => 'Universitas',
            'label_nim' => 'Label Nim',
            'nama_resmi' => 'Nama Resmi',
        ];
    }
}
