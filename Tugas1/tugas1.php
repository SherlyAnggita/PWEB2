<?php

class dosen { //membuat class dosen
    //atribut class
    public $nama;
    public $nip;
    public $mataKuliah;

    //implmentasi construct
public function __construct($nama, $nip, $mataKuliah)
{
    $this->nama = $nama;
    $this->nip  = $nip;
    $this->mataKuliah = $mataKuliah;
}

    //membuat metode dalam class untuk menampilkan informasi dosen
public function tampilkanDosen()
{
    return "Dosen $this->nama memiliki nip $this->nip mengampu mata kuliah $this->mataKuliah.";
}
}

//objek dari class dosen
$dosen = new dosen ("Almira", "890987", "Bahasa Indonesia");
//menampilkan informasi dari metode
echo $dosen->tampilkanDosen();

?>