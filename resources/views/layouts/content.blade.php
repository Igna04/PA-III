<html>
    <head>
      <style>
          #imageGallery {
              position: relative;
              max-width: 100%;
              overflow: hidden;
          }

          .slide {
              display: none;
              width: 100%;
          }

          .active {
              display: block;
          }
        </style>
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let slides = document.getElementsByClassName("slide");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }    
                slides[slideIndex - 1].style.display = "block";  
                setTimeout(showSlides, 2000); // Ganti gambar setiap 2 detik
            }
          });
        </script>
    </head>    
    <body> 
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">My Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>

                    <p>Jagung</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>100<sup style="font-size: 20px"></sup></h3>

                    <p>Padi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>54</h3>

                    <p>Kopi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>80</h3>

                    <p>Bawang</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
          </div><!-- /.container-fluid -->
          <div class="container">
            <div id="imageGallery">
                <img src="images/jagung.jpg" class="slide" alt="Slide 1">
                <img src="images/kopi.jpg" class="slide" alt="Slide 2">
                <img src="images/bawang.jpg" class="slide" alt="Slide 3">
                <img src="images/padi.jpg" class="slide" alt="Slide 4">
            </div>
        </div>
        
        
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </body>
  </head>
</html>
