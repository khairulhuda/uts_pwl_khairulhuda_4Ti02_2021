<?php
class Pegawai {
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // tampil data pegawai (dataPegawai.php)
    public function tampilData() {
        $sql = "SELECT pegawai.*, divisi.nama as divisi FROM pegawai INNER JOIN divisi on divisi.id = pegawai.iddivisi ORDER BY pegawai.id DESC";
        $gather = $this->koneksi->query($sql);
        return $gather;
    }

    // get foreign key table divisi (formPegawai.php)
    public function divisiPegawai() {
        $sql = "SELECT * FROM divisi";
        $gather = $this->koneksi->query($sql);
        return $gather;
    }

    // simpan data pegawai (formPegawai.php)
    public function simpan($data) {
        $sql = "INSERT INTO pegawai (nip,nama,email,agama,iddivisi,foto) VALUES(?,?,?,?,?,?)";
        $gather = $this->koneksi->prepare($sql);
        $gather->execute($data);
    }

    // detail data pegawai (detailPegawai.php)
    public function detailPegawai($data) {
        $sql = "SELECT pegawai.*, divisi.nama as divisi FROM pegawai INNER JOIN divisi on divisi.id = pegawai.iddivisi WHERE pegawai.id = ?";
        $gather = $this->koneksi->prepare($sql);
        $gather->execute([$data]);
        $result = $gather->fetch();
        return $result;
    }

    // ubah (pegawauController.php)
    public function ubah($data) {
        $sql = "UPDATE pegawai SET nip=?,nama=?,email=?,agama=?,iddivisi=?,foto=? WHERE pegawai.id=?";
        $gather = $this->koneksi->prepare($sql);
        $gather->execute($data);
    }

    // hapus pegawai (dataPegawai.php)
    public function hapus($id) {
        $sql = "DELETE FROM pegawai WHERE id=?";
        $gather = $this->koneksi->prepare($sql);
        $gather->execute($id);
    }
}