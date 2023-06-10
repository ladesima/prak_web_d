<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

class Mahasiswa1127Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $Mahasiswa = new Mahasiswa;
        $Mahasiswa->id_mhs_127 = '007';
        $Mahasiswa->nim_127 = '60200121126';
        $Mahasiswa->nama_127 = 'Muhammad Musyary';
        $Mahasiswa->kelas_127 = 'D';
        $Mahasiswa->status_127 = 'BARU';
        if ($Mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Mahasiswa = Mahasiswa::findOne($id);
        $Mahasiswa->nim_127 = '60200121127';
        $Mahasiswa->status_127 = 'UPDATED';
        if ($Mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Mahasiswa = Mahasiswa::findOne($id);
        if ($Mahasiswa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa->getErrors());
            die();
        }

    }

    public function actionView($id)
    {
        $mahasiswa = Mahasiswa::findOne($id);

        return $this-> render('view', [
            'model' => $mahasiswa,
        ]);
    }


}
