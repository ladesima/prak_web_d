<?php
    use yii\grid\GridView;
?>

<?=
    GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns' => [
            'id',
            'id_mahasiwa',
            'foto_profil',
        ]
    ])
?>
