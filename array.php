<?php

//array adalah kumpulan nilai/data yang berjenis sama
//setiap data punya posisi(index) dimulai dari 0
/*
variabel -> individu
array -> populasi
*/
//array numeric -> array yg indexnya berupa numeric
//array assosiative -> array yg indexnya berupa string
$student = "Jeon Somi";
$siswa = ["Hwang Yeji", "Choi Jisu", "Shin Ryujin", "Lee Chaeryeong", "Shin Yuna"];
echo $siswa[4];

$person = [
    ["name" => "Im Nayeon", "address" => "Seoul", "age" => 25],
    ["name" => "Yoo Jeongyeon", "address" => "Suwon", "age" => 24],
    ["name" => "Hirai Momo", "address" => "Kyoto", "age" => 24],
    ["name" => "Minatozaki Sana", "address" => "Osaka", "age" => 24],
    ["name" => "Park Jihyo", "address" => "Guri", "age" => 24],
    ["name" => "Myoui Mina", "address" => "Osaka", "age" => 24],
];
echo $person[1]["name"];
?>