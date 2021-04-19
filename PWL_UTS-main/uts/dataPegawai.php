<?php
require_once 'models/Pegawai.php';
$model = new Pegawai();
$tampil = $model->tampilData();
?>


<h2>Data Pegawai</h2>
<?php
if(isset($member)) {
?>
  <a href="index.php?page=views/menu/dataPegawai/formPegawai" class="btn btn-warning">Tambah</a>
<?php } ?>
<br>
<br>
<table class="table table-bordered text-center">
  <thead>
    <tr class="bg-warning">
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($tampil as $tampil) {
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $tampil['nip']; ?></td>
        <td><?= $tampil['nama']; ?></td>
        <td><?= $tampil['email']; ?></td>
        <td><?= $tampil['agama']; ?></td>
        <td><?= $tampil['divisi']; ?></td>
        <td><?= $tampil['foto']; ?></td>
        <td>
          <form method="POST" action="controllers/pegawaiController.php">
            <a href="index.php?page=detailPegawai&id=<?= $tampil['id']; ?>" class="btn btn-primary"><i class="fa fa-info" aria-hidden="true"></i></a>
            <?php
            $role = isset($member['role']) ? $member['role'] : null;
            if(isset($member)) {
            ?>
                <a href="index.php?page=formEditPegawai&id=<?= $tampil['id']; ?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
            <?php 
                if($role != 'staff') {
            ?>
                <button class="btn btn-danger" name="proses" value="hapus" onclick="return confirm('Data yang dipilih akan dihapus?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                <input type="hidden" name="idx" id="idx" value="<?= $tampil['id']; ?>"> 
            <?php
                }
            } 
            ?>
            
          </form>
        </td>
      <tr>
      <?php $no++;
    } ?>
  </tbody>
</table>