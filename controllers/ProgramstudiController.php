<?php

namespace app\controllers;
use app\models\ProgramStudi;
use yii\data\ActiveDataProvider;

class ProgramstudiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = ProgramStudi::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

}
