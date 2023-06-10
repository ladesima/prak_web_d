<?php 
    use yii\widgets\DetailView;
    use app\models\Mahasiswa;

?>

<?=  DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id_mhs_127',
        'nim_127',
        'nama_127',
        'kelas_127',
        'status_127'
    ],
]) 
?>