<?php

namespace app\controllers;
use app\models\Mahasiswa127;
use yii\data\ActiveDataProvider;

class Mahasiswa127Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa127::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionTambah()
    {
        $Mahasiswa127 = new Mahasiswa127;
        $Mahasiswa127->nim = '60200121120';
        $Mahasiswa127->nama = 'muiz';
        $Mahasiswa127->kelas = 'A';
        $Mahasiswa127->jurusan = 'TI';
        
        if ($Mahasiswa127->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa127->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Mahasiswa127 = Mahasiswa127::findOne($id);
        $Mahasiswa127->nim = '60200121003';
        if ($Mahasiswa127->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa127->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Mahasiswa127 = Mahasiswa127::findOne($id);
        if ($Mahasiswa127->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa127->getErrors());
            die();
        }

    }

    public function actionDetailView($id)
    {
        $model = Mahasiswa127::findOne($id);
        return $this->render('detail-view', [
            'model' => $model,
        ]);
    }


}
