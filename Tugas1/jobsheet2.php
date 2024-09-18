<?php

class Mahasiswa { //class mahasiswa
    private $nama; //attribute atau properti di dalam class mahasiswa
    private $nim;  //atribut private untuk menyimpan nilai
    private $jurusan;

//implementasi construct untuk menginisialisasi atribut
public function __construct($nama, $nim, $jurusan)
{
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;    
}
//metode menampilkan data mahasiswa
public function tampilkanData()
{
    echo "Mahasiswa: $this->nama dengan nim $this->nim merupakan jurusan $this->jurusan";
}

//metode getter untuk nama mahasiswa
public function getNama()
{
    return "Nama Mahasiswa: $this->nama";
}

//metode setter untuk nama mahasiswa
public function setNama($nama)
{
    $this->nama = $nama;
}

//metode getter untuk NIM mahasiswa
public function getNIM()
{
    return "NIM: $this->nim";
}

//metode setter untuk NIM mahasiswa
public function setNIM($nim)
{
    $this->nim = $nim;
}

//metode getter untuk jurusan mahasiswa
public function getJurusan()
{
    return "Jurusan: $this->jurusan";
}

//metode setter untuk jurusan mahasiswa
public function setJurusan($jurusan)
{
    $this->jurusan = $jurusan;
}
}

class Pengguna { //membuat class pengguna
    protected $nama;

//construct untuk menginisialisasi atribut
public function __construct($nama) 
{
    $this->nama = $nama;
}
public function getNama() 
{
    return "Nama Pengguna: $this->nama" ."<br>";
}

public function aksesFitur()
{
        // return "Akses fitur" ."<br>";
}
}

//class dosen yang mewarisi dari class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah; //atribut tambahan untuk menyimpan mata kuliah class dosen

public function __construct($nama, $mataKuliah)
{
    parent::__construct($nama); //memanggil construct class turunan
    $this->mataKuliah = $mataKuliah;
}

//metode menampilkan data dosen
public function tampilData() 
{
    echo  "Nama Dosen: $this->nama" ."<br>";
    echo  "Mata Kuliah: $this->mataKuliah" ."<br>";
}
public function aksesFitur()
{
        return "Dosen bisa mengakses matakuliah" ."<br>";
}
}

class Mahasiswa1 extends Pengguna
{
    public function __construct($nama)
    {
        parent::__construct($nama);
        $this->nama = $nama;
    }

public function aksesFitur()
{
    return "Mahasiswa bisa mengakses fitur nim ";

}
}

//Abstraction
abstract class abstractPengguna{
    protected $nama;

public function __construct($nama)
{
    $this->nama = $nama;
}

public function getNama()
{
    return "Nama Pengguna: $this->nama" ."<br>";
}

public function aksesFitur()
{
    return "";
}
}

class abstract_dosen extends abstractPengguna{ //abstract class yang mewarisi class abstractPengguna
    private $mata_kuliah; //property tampahan pada class abstract_dosen

public function __construct($nama, $mata_kuliah)
{
    parent::__construct($nama);
    $this->mata_kuliah = $mata_kuliah;
}
public function aksesFitur()
{
    return "akses fitur menggunakan class abstract." ."<br>";
}

public function tampilData() //metode tampil data abstract_dosen
{
    echo "Nama Dosen: $this->nama" ."<br>";
    echo "Mata Kuliah: $this->mata_kuliah";

}
}

class abstract_mahasiswa extends abstractPengguna{
public function __construct($nama)
    {
        parent::__construct($nama);
        $this->nama = $nama;
    }

public function tampilData()
{
    echo "Nama Mahasiswa: $this->nama";
}

public function aksesFitur()
{
    return "akses fitur class mahasiswa menggunakan abstract.";
}
}


//objek class Mahasiswa
$mhs = new Mahasiswa ("Anggita", "230202091", "Teknik Informatika");
echo $mhs->getNama() ."<br>";
echo $mhs->getNIM() ."<br>";
echo $mhs->getJurusan() ."<br>";

$mahasiswa_1 = new Mahasiswa1 ("Anjani");
echo $mahasiswa_1->aksesFitur() ."<br>";

//objek class Pengguna
$pengguna = new Pengguna ("Adi Wijaya");
echo $pengguna->getNama();
echo $pengguna->aksesFitur();


$dosen = new Dosen ("Adi Wijaya", "Matematika");
echo $dosen->tampilData();
echo $dosen->aksesFitur();

//abstraction
echo "<b>ABSTRACTION</b><br><hr>";
$dosen1 = new abstract_dosen("Daniel", "Bahasa Indonesia");
echo $dosen1->tampilData() ."<br>";
echo $dosen1->aksesFitur();

$mhs1 = new abstract_mahasiswa("Nami");

echo $mhs1->tampilData() ."<br>";
echo $mhs1->aksesFitur();


?>