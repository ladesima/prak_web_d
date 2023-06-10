<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_60200121127".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa127 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_60200121127';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 12],
            [['nama', 'jurusan'], 'string', 'max' => 60],
            [['kelas'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfil127()
    {
        return $this->hasOne(Profil127::class,['id_mahasiwa' => 'id']);
    }
}
