Aplikasi Surat ini Menggunakan Bahasa Pemograman PHP 7, diwajibkan.
apabila menggunakan php 8 tentunya ada perbedaan seperti ini 
fatal error: cannot redeclare str_contains() in c:\xampp\htdocs\appsuratmasukkeluar\helpers\functions.php on line 524 ketika dijalankan

untuk mengatasi permasalahan tersebut bagi pengguna yang menggunakan web server versi 8 atau php 8 silahkan ubah file yang ada C:\xampp\htdocs\appsuratmasukkeluar\helpers\Functions.php

kemudian baris code pada baris 524 
function str_contains($needle, $haystack)
{
	return strpos($haystack, $needle) !== false;
}

dirubah menjadi 

error_reporting(0);
if (strpos($haystack, $needle) !== false) {
  echo '';
}

Masih belajar, Belum sepuh sekian.
