<?php
class Golongan{
    public $nama, $tegangan, $tarif, $biayaAdmin;

    function __constructor($nama, $tegangan, $tarif){
        $this->biayaAdmin=13000;
        $this->nama=$nama;
        $this->tegangan=$tegangan;
        $this->tarif=$tarif;
    }
}

class Pelanggan{
    public $id, $nama, $golongan, $alamat, $tagihan;
    public function __construct($id, $nama, Golongan $golongan, $alamat, $tagihan){
        $this->id=$id;
        $this->nama=$nama;
        $this->golongan=$golongan;
        $this->alamat=$alamat;
        $this->tagihan=$tagihan;
    }

    public function countBill(){
        $tarif = $this -> golongan -> tarif;
        $biayaAdmin = $this -> golongan -> biayaAdmin;

        $jumlah = $tarif * $this->tagihan + $biayaAdmin;

        if ($jumlah < 50000) {
            return 50000;
        } else {
            return $jumlah;
        }
    }
}

//create object
$gol1 = new Golongan ("Golongan 1", "450 VA", 1000);
$gol2 = new Golongan ("Golongan 2", "1300 VA", 1300);
$gol3 = new Golongan ("Golongan 3", "2200 VA", 1500);

$galuh = new Pelanggan("1", "Galuh", $gol1, "Sawojajar", 90);
echo nl2br("\n Tagihan ".$galuh->nama." sebesar ".$galuh->countBill());
$indro = new Pelanggan("2","Indro", $gol3, "Kedungkandang", 200);
echo nl2br("\nTagihan ".$indro->nama." sebesar ".$indro->countBill());
?>