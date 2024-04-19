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
            width: 350px; 
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
                <h1 class="m-0"><b>Kopi</b></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Kopi</a></li>
                  <li class="breadcrumb-item active">My Plants</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><hr><!-- /.container-fluid -->
        <!-- /.content-header -->
            <center><img src="images/kopi.jpg" class="img-oval"></center>
            <h5>Tanaman Kopi</h5>
            <p>Kopi (Coffee) merupakan salah satu tanaman penting dalam industri pertanian dan minuman di seluruh dunia. Berikut adalah beberapa informasi mengenai tanaman kopi:</p>
            <h6>1. Deskripsi Tanaman Kopi</h6>
            <p>Tanaman kopi adalah tanaman berbuah yang termasuk dalam keluarga Rubiaceae. Tanaman ini memiliki daun hijau berkilau, bunga putih yang harum, dan buah berwarna merah ketika matang.</p>
            <h6>2. Persyaratan Tumbuh</h6>
            <p>Kopi tumbuh terbaik di daerah yang memiliki ketinggian tertentu, suhu yang stabil, curah hujan yang cukup, dan tanah yang subur. Kopi juga memerlukan sinar matahari yang cukup namun tidak langsung.</p>
            <h6>3. Proses Pertumbuhan</h6>
            <p>Tanaman kopi membutuhkan waktu beberapa tahun untuk mencapai kematangan penuh dan memulai produksi buah. Proses pertumbuhan kopi meliputi fase penanaman, perawatan, pembungaan, pembuahan, dan pemanenan.</p>
            <h6>4. Penggunaan Kopi</h6>
            <p>Kopi adalah salah satu minuman paling populer di dunia. Biji kopi yang dipanggang dan digiling menghasilkan minuman kopi yang disukai oleh jutaan orang di seluruh dunia. Selain itu, biji kopi juga digunakan dalam industri makanan dan minuman.</p>
            <h6>5. Varietas Kopi</h6>
            <p>Ada dua varietas utama tanaman kopi yang banyak dibudidayakan, yaitu Coffea arabica dan Coffea robusta. Varietas arabika umumnya dianggap memiliki kualitas rasa yang lebih baik daripada varietas robusta.</p>
            <h6>6. Masalah Penyakit dan Hama</h6>
            <p>Tanaman kopi rentan terhadap berbagai penyakit dan hama seperti penyakit jamur, kutu daun, dan penggerek buah. Pengendalian penyakit dan hama merupakan bagian penting dari budidaya kopi yang berhasil.</p>
            <h6>7. Pentingnya Kopi dalam Industri</h6>
            <p>Kopi memiliki peran penting dalam industri minuman dan ekonomi global. Selain sebagai minuman yang populer, industri kopi juga memberikan mata pencaharian bagi jutaan orang di seluruh dunia.</p>
        </div>
    </div>    
</body>
</html>

@include('layouts.footer')