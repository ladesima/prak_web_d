<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_60200121127".
 *
 * @property int $id
 * @property string $id_mahasiwa
 * @property string $foto_profil
 */
class Profil127 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_60200121127';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiwa', 'foto_profil'], 'required'],
            [['id_mahasiwa'], 'string', 'max' => 5],
            [['foto_profil'], 'string', 'max' => 20],
            [['id_mahasiwa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiwa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
