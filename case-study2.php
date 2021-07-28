<?php
/** Second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5*4*3*2*1=120
 * 
 */

 /*
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
echo faktorial(9);
*/

function faktorial($x){
	$hasil=1;
	for ($i=$x; $i >= 1 ; $i--) { 
		$hasil = $hasil * $i;
	}
	echo "faktorial($x)= $hasil";
}
faktorial(10);

?>