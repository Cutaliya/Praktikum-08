<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
    <script>
function hapusMatakuliah(pesan){
    if (confirm(pesan)){
        return true;
    }
    else{
        return false;
    }
}
</script>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
</head>
<body>
    <div class="col-md-12">
    <h3>Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mk){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mk -> nama ?></td>
                <td><?php echo $mk -> sks ?></td>
                <td><?php echo $mk -> kode ?></td>
            <td>
                <a href="<?php echo base_url("index.php/matakuliah/detail/$mk->id") ?>" 
                class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/matakuliah/edit/$mk->id") ?> 
                class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/matakuliah/delete/$mk->id") ?> class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
                onclick=" return hapusMatakuliah('Anda Yakin ingin menghapus matakuliah yang bernama <?php echo $mk->nama ?>?')">Hapus</a>
                </td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?=base_url()?>index.php/matakuliah/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
    </div> 
</body>
</html>