<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manda Agustriya || tugas 2 php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="alert alert-primary " role="alert"   >
        <h3 align=center> Input Data Pegawai</h3>
    </div>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="border border-light p-5" method="POST"> 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pegawai</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="agama" class="col-4 col-form-label">Agama</label> 
    <div class="col-8">
      <select id="agama" name="agama" class="custom-select">
        <option value="islam">Islam</option>
        <option value="kristen protestan">Kristen protestan</option>
        <option value="kristen katolik">Kristen katolik</option>
        <option value="hindu">Hindu</option>
        <option value="budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jabatan</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jabatan" id="jabatan_0" type="radio" class="custom-control-input" value="manager"> 
        <label for="jabatan_0" class="custom-control-label">Manager</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jabatan" id="jabatan_1" type="radio" class="custom-control-input" value="asisten"> 
        <label for="jabatan_1" class="custom-control-label">Asisten</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jabatan" id="jabatan_2" type="radio" class="custom-control-input" value="kabag"> 
        <label for="jabatan_2" class="custom-control-label">Kabag</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jabatan" id="jabatan_3" type="radio" class="custom-control-input" value="staff"> 
        <label for="jabatan_3" class="custom-control-label">Staff</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Status</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="status" id="status_0" type="radio" class="custom-control-input" value="menikah"> 
        <label for="status_0" class="custom-control-label">Menikah</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="status" id="status_1" type="radio" class="custom-control-input" value="belum menikah"> 
        <label for="status_1" class="custom-control-label">Belum Menikah</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlahanak" class="col-4 col-form-label">Jumlah Anak</label> 
    <div class="col-8">
      <input id="jumlahanak" name="jumlahanak" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<?php
error_reporting(0);
        $nama = $_POST['nama'];
        $agama= $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status= $_POST['status'];
        $jumlahanak = $_POST['jumlahanak'];
        $tombol = $_POST['proses'];

    
        switch ($jabatan) {
            case 'manager': $gapok = 20000000; break;
            case 'asisten': $gapok = 15000000; break;
            case 'kabag': $gapok = 10000000; break;
            case 'staff': $gapok = 4000000; break;
            default: $gapok = '';

        }

       $tunjab = 0.2 * $gapok;
       
       $tunkel = 0;
       if($status =='menikah'  && $jumlahanak >= 1  && $jumlahanak <= 2) $tunkel = 0.05 * $gapok;
       else if($status =='menikah'  && $jumlahanak >= 3  && $jumlahanak <= 5) $tunkel= 0.1 * $gapok;
       else if($status =='menikah'  && $jumlahanak >  5 ) $tunkel = 0.15 * $gapok;
       else $tunkel=0;
        
    $gaji_kotor = $gapok + $tunjab + $tunkel;   

    $zakat= ($agama == 'islam' && $gaji_kotor>='6000000')? 0.025 * $gaji_kotor :0 ;
    $take_home_pay = $gaji_kotor - $zakat;

if(isset($tombol)){ ?>
     <table class="table table-info">
             <thead>
              <tr>
                <th>Nama Pegawai: <?= $nama ?> </th>
                <th>Agama: <?= $agama ?> </th>
                <th>Jabatan: <?= $jabatan ?> </th>
                <th>Status: <?= $status ?> </th>
                <th>Jumlah Anak: <?= $jumlahanak ?> </th>
                <th>gapok: <?= number_format($gapok, 2, ',', '.'); ?> </th>
                <th>tunjab: <?= number_format($tunjab, 2, ',', '.'); ?> </th>
                <th>tunkel: <?= number_format( $tunkel, 2, ',', '.'); ?> </th>
                <th>Gaji kotor: <?= number_format($gaji_kotor, 2, ',', '.'); ?> </th>
                <th>Zakat: <?= number_format($zakat, 2, ',', '.'); ?> </th>
                <th>take home pay: <?= number_format($take_home_pay, 2, ',', '.'); ?> </th>
              </tr>  
            </thead>
              
            </div>
        </div>
    </div> 
<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>