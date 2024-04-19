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
                <h1 class="m-0"><b>Padi</b></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Padi</a></li>
                  <li class="breadcrumb-item active">My Plants</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><hr><!-- /.container-fluid -->
        <!-- /.content-header -->
            <center><img src="images/padi.jpg" class="img-oval"></center>
            <h5>Tanaman Padi</h5>
            <p>Padi (Oryza sativa) merupakan salah satu tanaman pangan yang paling penting di dunia. Berikut adalah beberapa informasi mengenai tanaman padi:</p>
            <h6>1. Deskripsi Tanaman Padi</h6>
            <p>Padi adalah tanaman semusim yang termasuk dalam keluarga Poaceae. Tanaman ini memiliki batang yang ramping, daun panjang, dan bulir biji yang terbentuk dalam malai di ujung batang.</p>
            <h6>2. Persyaratan Tumbuh</h6>
            <p>Padi tumbuh terbaik di daerah yang beriklim hangat dengan curah hujan yang cukup. Tanah yang ideal untuk pertumbuhan padi adalah tanah lembab yang mampu menahan air dengan baik.</p>
            <h6>3. Proses Pertumbuhan</h6>
            <p>Padi memiliki siklus pertumbuhan yang terdiri dari fase berkecambah, fase vegetatif, fase berbunga, fase pembentukan gabah, dan fase panen. Proses ini memerlukan waktu sekitar 3-6 bulan tergantung pada varietas padi dan kondisi tumbuhnya.</p>
            <h6>4. Penggunaan Padi</h6>
            <p>Padi adalah salah satu sumber karbohidrat utama bagi sebagian besar populasi di dunia. Berbagai produk pangan seperti nasi, tepung beras, mi, dan lainnya dibuat dari padi. Selain itu, padi juga digunakan dalam industri makanan dan minuman.</p>
            <h6>5. Varietas Padi</h6>
            <p>Ada ribuan varietas padi yang dibudidayakan di berbagai belahan dunia. Beberapa varietas populer termasuk padi pulen, padi wangi, padi ketan, dan padi beras merah.</p>
            <h6>6. Masalah Penyakit dan Hama</h6>
            <p>Padi rentan terhadap berbagai penyakit dan hama seperti blas, hawar daun, wereng, dan tikus sawah. Pengendalian penyakit dan hama perlu dilakukan secara teratur untuk menjaga produktivitas tanaman.</p>
            <h6>7. Pentingnya Padi dalam Pangan Global</h6>
            <p>Padi memiliki peran penting dalam pangan global dan keberlanjutan pangan. Tanaman ini memberikan sumber daya pangan bagi jutaan orang di seluruh dunia dan memainkan peran kunci dalam ekonomi dan keberlanjutan lingkungan.</p>
        </div>
    </div>
</body>
</html>

@include('layouts.footer')