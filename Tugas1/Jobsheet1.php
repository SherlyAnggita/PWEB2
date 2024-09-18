<?php
class Mahasiswa { //membuat class dengan nama mahasiswa
    //atribut class menyimpan data dari objek
    public $nama; 
    public $nim;
    public $jurusan;

//implementasi constract untuk menginisialisasi atribute
public function __construct($nama, $nim, $jurusan)
{
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}

    //metode tambahan dalam class sebagai operasi yang dilakukan oleh objek
public function updateJurusan ()
{
    $this->jurusan ="Teknik Informatika"; //mengisi atribut jurusan dengan nilai "Teknik Informatika"

}

//metode setter NIM mahasiswa
public function setNIM($nim)
{
    $this->nim = $nim;
    echo "Mahasiswa: $this->nama dengan nim $this->nim merupakan jurusan $this->jurusan";
}

//metode menampilkan data mahasiswa
public function tampilData ()
{
    echo "Mahasiswa: $this->nama dengan nim $this->nim merupakan jurusan $this->jurusan";
}
}

//objek dari class Mahasiswa
$mhs = new Mahasiswa ("Anggita", "230202091", "Komputer dan Bisnis");
echo $mhs->tampilData() ."<br>"; //menampilkan metode tampilData
echo $mhs->updateJurusan()  ."<br>"; //menampilkan metode updateJurusan
echo $mhs->setNIM("230202001")  ."<br>"; //menampilkan metode setter NIM
?>
