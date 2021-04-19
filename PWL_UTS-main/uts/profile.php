<h2>Profile</h2>
<br>
<br>
<div class="card bg-light" style="width: 18rem; height: 20rem;">
  <div class="card-body">
    <div class="text-center p-5 mt-5"><div class="mt-4"><?= $member['foto'];?></div></div>
  </div>
</div>
<br>

<pre><strong>Username</strong>    : <?= $member['username'];?></pre>
<pre><strong>Fullname</strong>    : <?= $member['fullname'];?></pre>
<pre><strong>Role</strong>        : <?= $member['role'];?></pre>
<br>
<a href="index.php?page=dataPegawai" class="btn btn-danger">Kembali</a>