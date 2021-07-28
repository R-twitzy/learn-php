<?php
/**
 * function/method/fungsi = blok kode yg akan dijalankan saat dipanggil
 * blok kode = kumpulan baris kode yg diapit oleh kurung kurawal
 * function punya parameter -> data yg akan diolah oleh fungsi tsb
 * fungsi void -> tidak mengembalikan value
 * fungsi mom void -> mengembalikan value (return value)
 * 
 */

 function prokes(){
     echo "memakai masker, ";
     echo "mencuci tangan, ";
     echo "mengurangi mobilitas | ";
 }
 echo prokes();

 function makan($makanan){
     echo "cuci tangan -> ";
     echo "baca doa -> ";
     echo "masukan $makanan -> ";
     echo "kunyah $makanan -> ";
     echo "telan $makanan | ";
 }
 echo makan("soto");
?>