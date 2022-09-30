<?php
   $m1 = ['nim'=>'200120001','Nama'=>'Kim Namjoon','nilai'=>100];
   $m2 = ['nim'=>'200120002','Nama'=>'Kim Seokjin','nilai'=>80];
   $m3 = ['nim'=>'200120003','Nama'=>'Min Yoongi','nilai'=>85];
   $m4 = ['nim'=>'200120004','Nama'=>'Jong Hoseok','nilai'=>70];
   $m5 = ['nim'=>'200120005','Nama'=>'Park Jimin','nilai'=>75];
   $m6 = ['nim'=>'200120006','Nama'=>'Kim Taehyung','nilai'=>55];
   $m7 = ['nim'=>'200120007','Nama'=>'Jeon Jungkook','nilai'=>67];
   $m8 = ['nim'=>'200120008','Nama'=>'Park Chanyeol','nilai'=>60];
   $m9 = ['nim'=>'200120009','Nama'=>'Doh Kyungsoo','nilai'=>40];
   $m10 = ['nim'=>'200120010','Nama'=>'Oh Se Hun','nilai'=>20];

    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $ar_judul = ['No','Nim','Nama','Nilai','Keterangan','Grade','Predikat'];


    $jumlah_mahasiswa = count($mahasiswa);
    $nilai = array_column($mahasiswa,'nilai');
    $tonil = array_sum($nilai);
    $max = max($nilai);
    $min = min($nilai);
    $rata2 = $tonil / $jumlah_mahasiswa;

    $keterangan = [
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Nilai Tertinggi' => $max,
        'Nilai Terendah' => $min,
        'Rata-Rata Nilai' => $rata2
    ];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manda Agustriya || tugas 3 php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
     <div class="container px-5 my-5">
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach ($ar_judul as $jdl) {
                    ?>
                    <th class="text-center"><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $nama) {
                    $ket = ($nama['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                    $grade;
                    $predik;

                    if ($nama['nilai'] <= 100 && $nama['nilai'] >= 80) $grade = 'A';
                    else if ($nama['nilai'] <= 79 && $nama['nilai'] >= 70) $grade = 'B';
                    else if ($nama['nilai'] <= 69 && $nama['nilai'] >= 60) $grade = 'C';
                    else if ($nama['nilai'] <= 59 && $nama['nilai'] >= 31) $grade = 'D';
                    else if ($nama['nilai'] > 0 && $nama['nilai'] <= 30) $grade = 'E';
                    else $grade = '';

                    switch ($grade) {
                        case 'A':$predikat = 'Memuaskan'; break;
                        case 'B':$predikat = 'Bagus';break;
                        case 'C':$predikat = 'Cukup';break;
                        case 'D':$predikat = 'Kurang'; break;
                        case 'E':$predik = 'Buruk';break;
                        default: $predikat = '';
                    }
                ?>
                <tr class="text-center">
                    <td> <?= $no++ ?> </td>
                    <td><?= $nama['nim'] ?></td>
                    <td><?= $nama['nama'] ?></td>
                    <td><?= $nama['nilai'] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                    <td><?= $ket ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr div class="alert alert-dark" role="alert">
                <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>