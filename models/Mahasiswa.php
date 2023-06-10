<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa127".
 *
 * @property int $id_127
 * @property int $id_mhs_127
 * @property string $nim_127
 * @property string $nama_127
 * @property string $kelas_127
 * @property string $status_127
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa127';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mhs_127', 'nim_127', 'nama_127', 'kelas_127', 'status_127'], 'required'],
            [['id_mhs_127'], 'integer'],
            [['nim_127', 'kelas_127'], 'string', 'max' => 12],
            [['nama_127', 'status_127'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_127' => 'Id 127',
            'id_mhs_127' => 'Id Mhs 127',
            'nim_127' => 'Nim 127',
            'nama_127' => 'Nama 127',
            'kelas_127' => 'Kelas 127',
            'status_127' => 'Status 127',
        ];
    }
}
