<?php

namespace app\controllers;
use app\models\Profil127;
use yii\data\ActiveDataProvider;

class Profil127Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil127::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

}
