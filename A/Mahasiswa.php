<?php

class Mahasiswa
{
    private $nim = "";
    private $nama = "";
    private $jenis_kelamin = "";
    private $program_studi = "";
    private $semester = 0;

    public function __construct($nim = "", $nama = "", $jenis_kelamin = "", $program_studi = "", $semester = 0)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->program_studi = $program_studi;
        $this->semester = $semester;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setJenisKelamin($jenis_kelamin)
    {
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function getJenisKelamin()
    {
        return $this->jenis_kelamin;
    }

    public function setProgramStudi($program_studi)
    {
        $this->program_studi = $program_studi;
    }

    public function getProgramStudi()
    {
        return $this->program_studi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    public function showMahasiswa()
    {
        echo "NIM : " . $this->getNim() . "<br/>";
        echo "Nama : " . $this->getNama() . "<br/>";
        echo "Jenis Kelamin : " . $this->getJenisKelamin() . "<br/>";
        echo "Program Studi : " . $this->getProgramStudi() . "<br/>";
        echo "Semester : " . $this->getSemester() . "<br/>";
    }
}
