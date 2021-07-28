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
/*
for ($i=0; $i < count($product) ; $i++) { 
    $total = $product[$i]["qty"] * $product[$i]["price"];
    echo "Nama Produk: ".$product[$i]["name"].", Jumlah: ".$product[$i]["qty"].", Harga: ".$product[$i]["price"].", Total: ".$total." | ";

}
*/


/** Second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5*4*3*2*1=120
 * 
 */
function faktorial($i){
	$angka = 1;
	$faktorial = 1;
	 while($angka <= $i){
		 $faktorial = $faktorial * $angka;
		 $angka = $angka + 1;
	 }
    echo "faktorial($i)= ";
    return $faktorial;
}
echo faktorial(10);

?>