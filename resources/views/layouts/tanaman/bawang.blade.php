@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CropSystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h5 {
            color: #b90909;
        }
        p {
            line-height: 1.6;
        }
        .img-oval {
            border-radius: 50%; 
            width: 300px; 
            height: 300px; 
        }    
    </style>
</head>
<body style="background: lightgray">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><b>Bawang</b></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Bawang</a></li>
                  <li class="breadcrumb-item active">My Plants</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><hr><!-- /.container-fluid -->
        <!-- /.content-header -->
            <center><img src="images/bawang.jpg" class="img-oval"></center>
            <h5>Tanaman Bawang</h5>
            <p>Bawang merupakan tanaman umbi-umbian yang telah dikenal dan digunakan sejak zaman kuno. Berikut adalah beberapa informasi mengenai tanaman bawang:</p>
            <h6>1. Deskripsi Tanaman Bawang</h6>
            <p>Bawang merupakan tanaman umbi yang termasuk dalam keluarga Alliaceae. Tanaman ini memiliki daun pipih dan silinder serta umbi yang dapat digunakan sebagai bahan masakan.</p>
            <h6>2. Persyaratan Tumbuh</h6>
            <p>Bawang membutuhkan tanah yang gembur dan kaya akan bahan organik. Tanah yang baik harus memiliki drainase yang baik dan tidak terlalu kompak. Bawang juga memerlukan cahaya matahari penuh untuk pertumbuhannya.</p>
            <h6>3. Proses Pertumbuhan</h6>
            <p>Bawang umumnya ditanam dari biji atau setumbu. Tanaman ini membutuhkan waktu sekitar 3-4 bulan untuk mencapai kematangan penuh. Proses pertumbuhannya meliputi fase berkecambah, fase vegetatif, dan fase pembentukan umbi.</p>
            <h6>4. Penggunaan Bawang</h6>
            <p>Bawang banyak digunakan sebagai bumbu masakan di berbagai belahan dunia. Selain itu, bawang juga memiliki khasiat kesehatan dan digunakan dalam pengobatan tradisional untuk berbagai kondisi.</p>
            <h6>5. Varietas Bawang</h6>
            <p>Ada berbagai varietas bawang yang tumbuh di berbagai bagian dunia. Beberapa varietas populer termasuk bawang merah, bawang putih, bawang bombai, dan bawang daun.</p>
            <h6>6. Masalah Penyakit dan Hama</h6>
            <p>Bawang rentan terhadap berbagai penyakit dan hama seperti bulai bawang, hawar daun, dan serangga penghisap getah. Pengendalian penyakit dan hama perlu dilakukan secara teratur untuk menjaga kesehatan tanaman.</p>
            <h6>7. Pentingnya Bawang dalam Masakan</h6>
            <p>Bawang adalah salah satu bumbu utama dalam masakan di berbagai budaya. Rasanya yang khas dan aroma yang kuat membuatnya menjadi komponen penting dalam banyak hidangan tradisional.</p>
        </div>
    </div>
</body>
</html>


@include('layouts.footer')