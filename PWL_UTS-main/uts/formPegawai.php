<?php
require_once 'models/Pegawai.php';
$model = new Pegawai();
$divisiPegawai = $model->divisiPegawai();
?>

<h2>Form Pegawai</h2>
<br>
<form method="POST" action="controllers/pegawaiController.php">
    <div class="form-group row mb-3 mb-3">
        <label for="nip" class="col-2 col-form-label">NIP</label>
        <div class="col-10">
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </span>
                <input id="nip" name="nip" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="nama" class="col-2 col-form-label">Nama</label>
        <div class="col-10">
            <input id="nama" name="nama" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="email" class="col-2 col-form-label">Email</label>
        <div class="col-10">
            <input id="email" name="email" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-2">Agama</label>
        <div class="col-10">
            <?php
            $arr_agama = ['Islam', 'Kristen Protestan', 'Kristen Khatolik', 'Hindu', 'Buddha', 'Khonghucu'];
            $no = 0;
            foreach ($arr_agama as $agama) {
            ?>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="agama" id="agama_<?= $no; ?>" type="radio" class="custom-control-input" value="<?= $agama; ?>" required="required">
                    <label for="agama_<?= $no; ?>" class="custom-control-label"><?= $agama; ?></label>
                </div>
            <?php $no++;
            } ?>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="divisi" class="col-2 col-form-label">Divisi</label>
        <div class="col-10">
            <select id="divisi" name="divisi" class="form-select" required="required">
                <option value="">--Pilih divisi--</option>
            <?php
            foreach($divisiPegawai as $divisi) {
            ?>
                <option value="<?= $divisi['id'];?>"><?= $divisi['nama'];?></option>
            <?php }?>
            </select>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="foto" class="col-2 col-form-label">Foto</label>
        <div class="col-10">
            <input id="foto" name="foto" type="text" class="form-control">
        </div>
    </div>
    
    <div class="form-group row mb-3">
        <div class="col-2"></div>
        <div class="d-flex justify-content-end col-10">
            <button name="proses" type="submit" class="btn btn-primary me-2" value="simpan">Simpan</button>
            <a href="index.php?page=dataPegawai" class="btn btn-danger">Batal</a>
        </div>
    </div>
</form>