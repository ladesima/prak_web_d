<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string $kode_barang
 * @property string $nama_barang
 * @property int $harga
 * @property int $jumlah_stok
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang', 'nama_barang', 'harga', 'jumlah_stok'], 'required'],
            [['harga', 'jumlah_stok'], 'integer'],
            [['kode_barang'], 'string', 'max' => 15],
            [['nama_barang'], 'string', 'max' => 60],
            [['kode_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'harga' => 'Harga',
            'jumlah_stok' => 'Jumlah Stok',
        ];
    }
}
