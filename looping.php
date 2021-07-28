<?php
// looping(perulangan) -> mengulang baris kode perintah
// type of looping -> for, while, do.. while

/** konsep looping
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 */

// selama kondisi benar, looping terus berlanjut
// saat kondisi salah, looping berhenti

//case 1: menampilkan kelipatan 5 mulai dari -50 sampai 100
/*
$start = -50;
for ($i=$start; $i < 100 ; $i+=5) { 
    echo "$i, ";
}
*/

//case 2
$person = [
    ["name" => "Im Nayeon", "address" => "Seoul", "age" => 25],
    ["name" => "Yoo Jeongyeon", "address" => "Suwon", "age" => 24],
    ["name" => "Hirai Momo", "address" => "Kyoto", "age" => 24],
    ["name" => "Minatozaki Sana", "address" => "Osaka", "age" => 24],
    ["name" => "Park Jihyo", "address" => "Guri", "age" => 24],
    ["name" => "Myoui Mina", "address" => "Kobe", "age" => 24],
    ["name" => "Kim Dahyun", "address" => "Seongnam", "age" => 23],
    ["name" => "Son Chaeyoung", "address" => "Seoul", "age" => 22],
    ["name" => "Chou Tzuyu", "address" => "Taiwan", "age" => 24],
];
//tanda titik digunakan untuk menggabungkan string (java -> tanpa +)
//count digunakan untuk mengerahui jumlah array

//menampilkan isi dalam array person
for ($i=0; $i < count($person) ; $i++) { 
    echo $person[$i]["name"]." ".$person[$i]["address"]." ".$person[$i]["age"]." | ";
}

?>