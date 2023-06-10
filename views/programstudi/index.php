<?php
     use app\models\ProgramStudi;
     use yii\grid\GridView;
     use yii\helpers\Html;
     use yii\helpers\url;
     use yii\grid\ActionColumn;
?>

<?=
    GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns' => [
            'id',
            'universitas',
            'label_nim',
            'nama_resmi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProgramStudi $model){
                    return url::toRoute([$action,'id' => $model->id]);
                }
            ],
        ]
    ])
?>