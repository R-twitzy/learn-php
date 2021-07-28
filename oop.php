<?php
/**
 * object -> everythings that have attribute and behaviour. Attribute is part of object
 * behaviour is action of object
 * example: Object-> ayam, Attribute(Jenis, sayap, paruh, jengger), Behaviour(berjelan, bertelur, makan)
 * 
 * class -> pattern/kerangka dari objek
 * analogi= object->kue, class->cetakan kue
 * satu cetakan menghasilkan byk kue
 */

$person = [
    ["name" => "Bangchan", "height" => 1.71, "weight" => 70],
    ["name" => "Lee Know", "height" => 1.73, "weight" => 65],
    ["name" => "Changbin", "height" => 1.67, "weight" => 72],
    ["name" => "Hyunjin", "height" => 1.79, "weight" => 67],
    ["name" => "Han", "height" => 1.69, "weight" => 61],
    ["name" => "Felix", "height" => 1.71, "weight" => 60],
    ["name" => "Seungmin", "height" => 1.77, "weight" => 66],
    ["name" => "IN", "height" => 1.75, "weight" => 63],

];
//mengetahui BMI dan kategori tiap orang
/**
 * class-> person
 * attributes-> name, height, weight
 * behaviour-> count BMI dan get category
 */
class Person{

    //atribut itu diimplementasikan sbg variabel class
    public $name, $height, $weight;

    //constructor adlh fungsi yg pertama kali dijalankan saat proses pembuatan objek baru (ada "new")
    public function __construct($name, $height, $weight){
        $this->name =$name;
        $this->height =$height;
        $this->weight =$weight;        
    }

    //behaviour itu diimplementasikan sbg method dan fungsi
    public function countBMI(){
        //this digunakan utk mengakses atribut dari class
        $bmi = $this->weight / ($this->height*$this->height);
        return $bmi;
    }

    public function getCategory(){
        $bmi = $this->countBMI();
        if ($bmi<18.5){
            return "berat badan kurang";
        }
        elseif ($bmi>=18.5 && $bmi<23){
            return "berat badan normal";
        }
        elseif ($bmi>=23 && $bmi<30){
            return "berat badan berlebih";
        }
        elseif ($bmi<=30){
            return "obesitas";
        }
    }
}
//create object
$person1 = new Person("Han", 1.69, 61);
$person2 = new Person("IN", 1.75, 63);
echo "BMI dari ".$person1->name." adalah ".$person1->countBMI()." dengan kategori ".$person1->getCategory();
echo nl2br("\n"); //untuk breakline
echo "BMI dari ".$person2->name." adalah ".$person2->countBMI()." dengan kategori ".$person2->getCategory();

?>