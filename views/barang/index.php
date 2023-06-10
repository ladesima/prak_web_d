<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\helpers\url;
    use app\models\Barang;
?>
<?= Html::a('Barang Baru', ['Barang/create'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'kode_barang',
            'nama_barang',
            'harga',
            'jumlah_stok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Barang $model){
                    return url::toRoute([$action,'id' => $model->id]);
                }
            ],
        ]
    ])
?>
