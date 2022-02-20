
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman <?php echo $judul; ?></title>
<link rel="stylesheet" href="<?php echo base_url('public')?>/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:10px;">
        <div class="card" >
            <h3 style="margin:10px;">DATA LOGISTIK LEMBAR KERJA SISWA (LKS)</h3>
            <p style="margin:10px;">Nama Programmer : <?php echo  $nama; ?> </p>
            <nav class="nav">
                <?php $uri =  $this->uri->segment(1)?>
              <a class="nav-link"  href="<?php echo base_url('')?>" <?php if($uri == ''){echo 'style="color:#000;"';}else{}?> >Input Stock</a>
              <a class="nav-link" href="<?php echo base_url('Distribusi')?>" <?php if($uri == 'Distribusi'){echo 'style="color:#000;"';}else{}?> >Distribusi</a>
              <a class="nav-link" href="<?php echo base_url('Stock/cek')?>" <?php if($uri == 'Stock'){echo 'style="color:#000;"';}else{}?> >Cek Stock</a>
            </nav>
          <div class="card-body">
 