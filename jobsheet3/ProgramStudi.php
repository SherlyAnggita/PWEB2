<?php

class DatabaseProdi{

    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect("localhost","root","","mahasiswa");
    }
    
}

class ProgramStudiModel extends DatabaseProdi{
    public function getAllProgramStudi()
    {
        $query = "SELECT * FROM prodi";
        return mysqli_query($this->koneksi, $query);
    }
}