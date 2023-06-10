<?php

namespace app\controllers;
use app\models\Barang;
use yii\data\ActiveDataProvider;

class BarangController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Barang::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

        public function actionTambah()
    {
        $Barang = new Barang;
        $Barang->kode_barang = 'B3';
        $Barang->nama_barang = 'lem';
        $Barang->harga = '500';
        $Barang->jumlah_stok = '11';
        if ($Barang->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Barang->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Barang = Barang::findOne($id);
        $Barang->kode_barang = 'C4';
        if ($Barang->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Barang->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Barang = Barang::findOne($id);
        if ($Barang->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Barang->getErrors());
            die();
        }

    }


}
