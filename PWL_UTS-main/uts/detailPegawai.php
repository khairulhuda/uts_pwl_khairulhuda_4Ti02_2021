<?php
require_once 'models/Pegawai.php';
$pegawai = new Pegawai();
$data = $_REQUEST['id'];
$detail = $pegawai->detailPegawai($data);
?>
<h2>Detail Pegawai</h2>
<br>
<br>
<div class="card bg-light" style="width: 18rem; height: 20rem;">
  <div class="card-body">
    <div class="text-center p-5 mt-5"><div class="mt-4"><?= $detail['foto'];?></div></div>
  </div>
</div>
<br>

<pre><strong>NIP</strong>    : <?= $detail['nip'];?></pre>
<pre><strong>Nama</strong>   : <?= $detail['nama'];?></pre>
<pre><strong>Email</strong>  : <?= $detail['email'];?></pre>
<pre><strong>Agama</strong>  : <?= $detail['agama'];?></pre>
<pre><strong>Divisi</strong> : <?= $detail['divisi'];?></pre>
<br>
<a href="index.php?page=dataPegawai" class="btn btn-danger">Kembali</a>