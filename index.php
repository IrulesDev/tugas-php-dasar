<?php
//Variabel & Tipe Data 📊


//1.
// Buat sebuah variabel yang menyimpan nilai string dan tampilkan hasilnya.
    $nama = 'irul';
    echo $nama;

    echo "<br>";

//2.
//Buat sebuah variabel yang menyimpan nilai integer, kemudian ubah nilai variabel tersebut dengan menambahkan 5
    $nomer = 2005;
    echo $nomer+5 . "<br>";

    echo "<br>";


//3.
//Buat sebuah variabel boolean dengan nilai "true" dan tampilkan hasilnya.

    $x = 20;

    if ($x > 30) {
        echo"benar";
    }
    else {
        echo "salah";
    }

    echo "<br>";

//4.
//Buat sebuah array yang berisi angka dari 1 sampai 5, kemudian tampilkan elemen pertama dan terakhir dari array tersebut.
    $jawaban = array (1,2,3,4,5);
    echo $jawaban[0] . ' dan ' . $jawaban[4];

    echo "<br>";

//5.
//Tentukan tipe data untuk variabel berikut dan tampilkan tipe datanya:<?php
    $var = 100;
    var_dump($var). "<br>";
//integer!!!! <-jawaban

echo "<br>";

//6.
//Buat sebuah variabel yang menyimpan float dan ubah nilai variabel tersebut menjadi hasil perkalian dengan 2.
    $a = 0.5;
    $b = 5;

    $a = (float) $a;
    $b = (float) $b;

    echo $a * $b;

    echo "<br>";

//7.
//Tentukan tipe data untuk variabel berikut dan tampilkan tipe datanya:
    $var = "123";
    var_dump($var . '' ."<br>");
//string!!!! <-jawaban

echo "<br>";

//Casting 🔄


//1.
//Ubah variabel string yang berisi angka "123.45" menjadi integer, dan tampilkan hasilnya.
    $angka = 123.456;
    function perubaha(int $Angka){
        global $angka;
        $angka = $Angka;
        return $angka;
    }

    var_dump(perubaha($angka));

    echo "<br>";

//2.
//Ubah variabel integer menjadi float. Kemudian, tampilkan hasilnya.
    $cas = 20;

    $cas = (float) $cas;

    var_dump($cas);

    echo "<br>";

// 3.
//Buat variabel bertipe array dan ubah menjadi tipe object, kemudian tampilkan hasilnya.
    $aray = [
        "email"=>"irulemail@gmail.com",
        "nohap"=>"7883768976"
    ];
    $hasil = (object) $aray;
    echo $hasil->email;
    echo $hasil->nohap;

    echo "<br>";

//Function 🔧


//1.
//- Buat sebuah fungsi yang menerima dua parameter integer dan mengembalikan hasil penjumlahannya.
    function penjumlahan($a , $b){
        $hasil = $a + $b;
        return $a . '+' . $b .'='. $hasil;
    }

    echo penjumlahan(5,7);

    echo "<br>";

//2.
//Buat fungsi yang menerima satu parameter string dan menampilkan hasilnya dengan awalan "Hello, ".
    function hello($isi){
        echo "hello $isi";
    } 

    echo "<br>";

//3.
//Buat fungsi rekursif untuk menghitung faktorial dari angka yang diberikan.


//4.
//Buat sebuah fungsi yang menerima dua parameter dan mengembalikan nilai tertinggi di antara kedua angka tersebut.


//5.
//Buat fungsi yang menerima dua angka dan mengembalikan hasil pembagian keduanya. Pastikan untuk menangani pembagian dengan nol (dividing by zero)


//Class & Object 🏷️

//1.
//Buat sebuah class bernama Person dengan property name dan age. Buat objek dari class tersebut dan tampilkan nilai property name.
    class person{
        public $name;
        public $ege;

        function nama($nama){
            $this->name;
        }
        function hasil(){
            return $this->name;
        }
    }

    $keluar = new person;
    $keluar->nama('irul');
    echo $keluar->hasil();

    echo "<br>";

//2.
//Buat class Car dengan method startEngine(), yang menampilkan "Engine Started" ketika dipanggil.
    class Car{
        public $engine;
        function startEngine(){
            $this->engine = "Engine Started";
        }
        function hasilEngine(){
            return $this->engine;
        }
    }

    $Engine = new Car;
    $Engine->hasilEngine();
    echo $Engine->hasilEngine();

    echo "<br>";

//3.
//Buat class Rectangle dengan property width dan height, serta method calculateArea() yang mengembalikan hasil luas (area) dari persegi panjang.
    class Rectangle{
        public $height;
        public $widht;
        function calculateArea($height,$widht){
            $this->height = $height;
            $this->widht = $widht;
        }
        function LuasPersegiPanjang(){
            $hasilP = $this->height * $this->widht;  
            return $this->height . ' + ' . $this->widht . ' = ' . $hasilP;
        }
    }
    
//4.
//Buat objek dari class Rectangle dan tampilkan hasil perhitungan area berdasarkan property width dan height.

    $persegi = new Rectangle;
    $persegi->calculateArea(10,30);
    echo $persegi->LuasPersegiPanjang();

    echo "<br>";

//5.
//Buat class Employee dengan method getSalary(). Tulis kode untuk menampilkan gaji dari objek Employee.



//Constructor & Destructor 🛠️

//1.
//Buat class dengan constructor yang menerima parameter name dan age, dan tampilkan nama serta umur ketika objek diinisialisasi.
    class construk{
        public $name1;
        public $ege;
        function __construct($name,$ege){
            $this->name1 = $name;
            $this->ege = $ege;
        }
        function regdsa(){
            return $this->name1 . ' , ' . $this->ege;
        }
    }

    $cons = new construk('irul',19);
    echo $cons->regdsa();

    echo "<br>";
//2.
//Buat class Book dengan constructor yang menerima parameter title dan author. Tampilkan informasi buku saat objek dibuat.

    class book{
        public $title;
        public $author;
        function __construct($title,$author){
            $this->title = $title;
            $this->author = $author;
        }
        function __destruct(){
            echo "buku $this->title di buat oleh $this->author";
        }

        
    }
    $info = new book("hujan","tereliye");
    echo $info->__destruct();
    
    echo "<br>";    
//3.
//Buat class DatabaseConnection dengan destructor yang mencetak pesan "Koneksi ke database ditutup" ketika objek dihancurkan.
    class DatabaseConnection{
        function massage(){
            echo "koneksi ke database di tutup";
        }
    }

    $data = new DatabaseConnection;
    echo $data->massage();

    echo "<br>";
    //4.
    //Buat class yang memiliki constructor untuk menerima nilai parameter, dan destructor yang mencetak pesan ketika objek dihancurkan.
    class memiliki{
        public $menerima;
        public $memberi;
        function __construct($menerima,$memberi){
            $this->memberi = $menerima;
            $this->menerima = $memberi;
        }
        function __destruct(){
            echo "penjual menerima $this->menerima dan memberi $this->memberi";
        }
    }
    $jualbeli = new memiliki("uang","barang");
    $jualbeli->__destruct();
    
    echo "<br>";

//Visibility: Public, Protected, Private 🔒

//1.
//Buat class Student dengan property name yang memiliki akses private, method getName() yang memiliki akses public, dan method setName() yang memiliki akses protected. Demonstrasikan akses terhadap properti dan metode di luar class.
    class Student{
        private $irul;
        public $fauzan;
        protected $thoni;

        public function getName($nama){
            $this->fauzan = $nama;
            $this->irul = $nama;
            $this->thoni = $nama;
        }
        protected function setName(){
            return $this->irul . $this->fauzan . $this->thoni;
        }
    }

    $kelas = new Student;
    $kelas->getName('irul');
    echo $kelas->$irul;



?>