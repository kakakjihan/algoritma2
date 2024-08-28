<?php

$nama = "jihan";
$hargA = 1000;
$nama_barang = "sepatu sekolah";
$harga = 200;
$stok = 50;
// membuat variabel baru
$stok = 50;
//1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
//Contoh: ✔️ Benar
$namakepanjangan = "jihan syafitri";
$namapendek = "jihan";
//2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
//Contoh:
$namabarang = "kalung";
$namapembeli = "putri"; //  menggunakan camelCase

//3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
//Contoh:
$nama_Barang = "jam tangan";
$namaPembeli = "putri";
//4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
//Contoh: Tiga variabel ini akan dianggap berbeda.
$BELAJAR = "seni budaya";
$belajar = "olahraga";
$bElajar = "matematika";
// =================== cara mencetak =======================
echo 
"<p>nama: $nama",
"<p>harga: $hargA",
"<p>nama_barang: $nama_barang",
"<p>harga sepatu sekolah: $harga",
"<p>stok sepatu sekolah: $stok",
"<p>nama kepanjangan: $namakepanjangan",
"<p>namapendek: $namapendek",
"<p>namabarang: $namabarang",
"<p>nama pembeli: $namapembeli",
"<p>nama_Barang: $nama_Barang",
"<p>namapembeli: $namaPembeli";




