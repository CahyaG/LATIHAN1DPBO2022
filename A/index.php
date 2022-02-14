<?php
include "Mahasiswa.php";

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNim("2003128");
$mahasiswa1->setNama("Cahya Gumilang");
$mahasiswa1->setJenisKelamin("Laki-Laki");
$mahasiswa1->setProgramStudi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

$mahasiswa1->getListMahasiswa();
