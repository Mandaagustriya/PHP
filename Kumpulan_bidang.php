<?php
    require_once 'Lingkaran.php';
    require_once 'persegiPanjang.php';
    require_once 'Segitiga.php';

    $lingkaran = new Lingkaran();
    $persegiPanjang = new PersegiPanjang();
    $segitiga = new Segitiga();

    $data = [$lingkaran, $persegiPanjang, $segitiga];
    $judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>

<h3 align="center">Penyelesaian Rumusan</h3>
<table border="1" cellpadding="10" cellspacing="0" align="center" width="45%">
    <head>
        <tr>
            <?php 
            foreach ($judul as $jdl) {?>
            <th><?= $jdl; ?></th>
            <?php } ?>
        </tr>
    </head>
    <body>
        <?php 
        $no = 1;
        $ket = [1 =>'Jari-Jari =  20', 
        'Panjang = 13 <br> Lebar = 6',
        'diketahui:
        <br> alas = 20 
        <br> tinggi = 10 
        <br> <br> Keliling : 
        <br> sisi a = 20 
        <br> sisi b = 20
        <br> sisi c = 20'];

        foreach ($data as $d) {?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $d->NamaBidang() ?></td>
            <td><?= $ket[$no] ?></td>
            <td><?= $d->luasBidang() ?></td>
            <td><?= $d->kelilingBidang() ?></td>
        </tr>

        <?php  $no ++; } ?>
    </body>
    <tfoot>
        <?php
            foreach ($Keterangan as $k => $hasil) {?>             
            <tr>
                <td colspan="3"><?= $k ?></td>
                <td colspan="7" align="center"><?= $hasil ?></td>
            </tr>
        <?php } ?>
    </tfoot>
</table
