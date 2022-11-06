<?php

class Person
{
    #membuat publik variable/property
    public $name;
    public $alamat;
    public $jurusan;

    # Membuat Constructor
    public function __construct($name, $umur, $alamat)
    {
        $this->name = $name;
        $this->umur = $umur;
        $this->alamat = $alamat;
    }

    public function setNama($data){
        $this->nama = $data;
    }

    public function getNama(){
        return $this->nama; 
    }

    public function getUmur(){
        return $this->umur;
    }

    public function getAlamat(){
        return $this->alamat;
    }
}
$ihsan = new Person("Ihsan", 30, "Semarang");
$jamal = new Person("Jamal", 40, "Jakarta");


echo $ihsan->getNama();
echo "<br>";
echo $jamal->getNama(); 


$mahasiswa =   [
[
    'nama' => 'muhammad ihsan',
    'jurusan' => 'teknik informatika',
],
[
    'nama' => 'kurnia karim',
    'jurusan' => 'sistem informasi',
]
];

foreach ($mahasiswa as $mhs){
    $person = new Person("Ihsan", 10, "Semarang");
    echo "</br>";
    $person->setNama($mhs['nama']);
    echo  $person->getNama();
    echo "</br>";
}


$ihsan1 = new Person("Ihsan", 10, "Semarang");
$ihsan1->setNama('kurnia ');
echo $ihsan1->getNama();
echo "<br/>";


$kemal = new Person("kemal", 20, "Kinabalu");
$kemal->setNama("KEMAL PAHLEVI");
echo $kemal->getNama();

