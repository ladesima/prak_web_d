<?php
    use app\models\Mahasiswa127;
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\helpers\url;
    use yii\grid\ActionColumn;
?>
<div>
    <h1><?= Html::encode($this->title)?></h1>

    <p>
        <?= Html::button('Mahasiswa Baru' , ['class' => 'btn btn-primary']) ?>
    </p>
<?=
    GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan',
            'profil127.foto_profil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa127 $model){
                    return url::toRoute([$action,'id' => $model->id]);
                }
            ],
        ],
    ]);
    ?>
</div>
