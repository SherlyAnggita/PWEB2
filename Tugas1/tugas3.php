<?php

class Person { 
    protected $nama;

public function __construct($nama) //menginisialisasi property atau atribut
{
    $this->nama = $nama;
}

//metode menampilkan data nama
public function getName()
{
    return "Nama: $this->nama";
}
public function getRole()
{

}
}

//class dosen yang mewarisi dari class Person
class Dosen extends Person {
    private $nidn;

public function __construct($nama, $nidn)
{
    parent:: __construct($nama);
    $this->nidn = $nidn;
}

public function tampilData()
{
    echo "Nama Dosen: $this->nama" ."<br>";
    echo "NIDN      : $this->nidn";
}

public function getRole()
{
    return "<b> Dosen </b>";
}
}

//class Mahasiswa yang mewarisi dari class Person
class Mahasiswa extends Person {
    private $nim;

public function __construct($nama, $nim)
{
    parent:: __construct($nama);
    $this->nim = $nim;
}
public function tampilData()
{
    echo "Nama Mahasiswa: $this->nama";
}

public function getRole()
{
    return "<b>Mahasiswa</b>";
}
}

abstract class Jurnal {
protected $judul;

public function __construct($judul)
{
    $this->judul = $judul;
}
public function tampilJudul()
{
    return "Judul: $this->judul";
}

    abstract public function kelolaJurnal();
}

class JurnalDosen extends Jurnal{
    public function kelolaJurnal()
    {
        echo "Judul: $this->judul" ."<br>";
        echo "<b>kelola jurnal dosen</b>";
    }
}

class JurnalMahasiswa extends Jurnal{
    public function kelolaJurnal()
    {
        echo "Judul: $this->judul" ."<br>";
        echo "<b>kelola jurnal mahasiswa</b> ";
    }
}

$dosen = new Dosen ("Mulyono", "123456");
echo $dosen->tampilData() ."<br>";
echo $dosen->getRole() ."<br>";


$mhs = new Mahasiswa ("Andhini", "230987891");
echo $mhs->tampilData() ."<br>";
echo $mhs->getRole() ."<br>";

$jurnal_dosen = new JurnalDosen ("Jurnal Dosen");
echo $jurnal_dosen->kelolaJurnal() ."<br>";

$jurnal_mahasiswa = new JurnalMahasiswa ("Jurnal Mahasiswa");
echo $jurnal_mahasiswa->kelolaJurnal() ."<br>";
?>