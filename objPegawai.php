<?php
require 'Pegawai.php';
//ciptakan object
$maya = new Pegawai('01022022','Manda Agustriya','Manager','Muslim','Belum Menikah');
$Jim = new Pegawai('01032022','Park Jimin','Asisten','Muslim','Menikah');
$kim = new Pegawai('01042022','Kim Taehyung','Kabag','Non Muslim','Belum Menikah');
$min = new Pegawai('01052022','Min Yoongi','Staff','Muslim','Belum Menikah');
$jeon = new Pegawai('01062022','Jeon Jungkook','Staff','Non Muslim','Menikah');


//use member class

echo '<h3 align="center">'.Pegawai::PERUSAHAAN.'</h3>';
$maya->mencetak();
$Jim->mencetak();
$kim->mencetak();
$min->mencetak();
$jeon->mencetak();
echo 'Jumlah Pegawai: '.Pegawai::$jml;