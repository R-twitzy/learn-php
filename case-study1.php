<?php
//first case
$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yang dibeli */
//Menentukan total yang harus dibayar
$bayar=0;
for ($i=0; $i < count($product) ; $i++) { 
    $total = $product[$i]["qty"] * $product[$i]["price"];
    echo "Nama Produk: ".$product[$i]["name"].", Jumlah: ".$product[$i]["qty"].", Harga: ".$product[$i]["price"].", Total: ".$total." | ";
    $bayar += $total;
}
echo "Bayar: ".$bayar
?>