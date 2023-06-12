<?php 
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use app\models\Mahasiswa;
    use yii\helpers\url;

?>
<?= Html::a('Mahasiswa Baru', ['mahasiswa/create'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_mhs_127',
            'nim_127',
            'nama_127',
            'kelas_127',
            'status_127',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa $model) {
                    return Url::toRoute([$action, 'id' => $model->id_127]);
                }
            
            ],
        ],
    ])
?>
