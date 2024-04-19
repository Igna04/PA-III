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
        .sidebar-button {
            background-color: #your-desired-color;
            color: #your-desired-text-color;
        }
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
                <h1 class="m-0"><b>Jagung</b></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Jagung</a></li>
                  <li class="breadcrumb-item active">My Plants</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><hr><!-- /.container-fluid -->
        <!-- /.content-header -->
            <center><img src="images/jagung.jpg" class="img-oval"></center>
            <h5>Tanaman Jagung</h5>
            <p>Jagung (Zea mays) merupakan tanaman sereal yang ditanam secara luas di berbagai belahan dunia. Berikut adalah beberapa informasi mengenai tanaman jagung:</p>
            <h6>1. Deskripsi Tanaman Jagung</h6>
            <p>Jagung adalah tanaman tahunan yang termasuk dalam keluarga rumput-rumputan (Poaceae). Tanaman ini memiliki batang tegak, daun yang lebar, dan tandan berisi biji jagung.</p>
            <h6>2. Persyaratan Tumbuh</h6>
            <p>Jagung membutuhkan tanah yang subur dan kaya akan nutrisi. Tanah yang baik harus memiliki drainase yang baik dan mampu menahan kelembaban. Jagung juga membutuhkan cahaya matahari penuh dan iklim hangat.</p>
            <h6>3. Proses Pertumbuhan</h6>
            <p>Jagung tumbuh melalui beberapa fase, yaitu fase berkecambah, fase vegetatif, fase pembentukan tongkol, dan fase pematangan biji. Proses ini memerlukan waktu sekitar 60-100 hari tergantung pada varietas jagung.</p>
            <h6>4. Penggunaan Jagung</h6>
            <p>Jagung memiliki berbagai penggunaan, antara lain sebagai makanan manusia, pakan ternak, bahan baku industri (seperti penghasil tepung maizena dan sirup jagung), serta biofuel.</p>
            <h6>5. Varietas Jagung</h6>
            <p>Ada berbagai varietas jagung yang telah dikembangkan untuk berbagai kondisi tumbuh dan kebutuhan. Beberapa varietas populer termasuk jagung manis, jagung pipil, dan jagung hibrida.</p>
            <h6>6. Masalah Penyakit dan Hama</h6>
            <p>Jagung rentan terhadap berbagai penyakit dan hama seperti bulai jagung, hawar daun, kutu daun, dan ulat jagung. Pengendalian penyakit dan hama perlu dilakukan secara teratur untuk memastikan produksi yang optimal.</p>
            <h6>7. Pentingnya Jagung dalam Pangan Global</h6>
            <p>Jagung merupakan salah satu tanaman pangan yang penting di seluruh dunia. Selain sebagai sumber karbohidrat, jagung juga memiliki nilai ekonomis yang tinggi bagi banyak negara.</p>
        </div>
    </div>

</body>
</html>


@include('layouts.footer')