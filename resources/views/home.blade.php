<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body{
    background-color: #c7cce9;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: rgb(247, 250, 250);
}

.form-control
{
    font-size: 14px;
}

@media screen and (min-width:992px){   
.form-control{
    width: 350px;
}
}

.form-cari
{
    position: absolute;
    right: 25%;
}

@media screen and (max-width:992px){
    .form-cari{
        visibility: hidden;
        position: absolute;
       
    }
    }

@media screen and (min-width:992px){
        .form-cari2{
            visibility: hidden;
            
        }
        }
    

@media screen and (max-width:992px){
.form-cari{
    position: relative;
    right: 0%;
    
}
}


@media screen and (max-width:992px){   
    .home1{
        margin-top: -70px;      
    }
    }
    


.img-category
{
    width: 140px;
}
.img-category:hover{
    transform:scale(1.08);
    transition: 0.2s;
}

.row-container
{
    background-color: #fff;
    margin: 0px;
}

.judul-kategori
{
    background-color: #fff;
    padding: 5px 10px;
}

.card:hover
{
    border: 1px solid #fbf4f4;
    transition: 0.2s;
}

    </style>
  </head>
  <body>
    
    <!--cover atas/navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png" alt="Logo" width="60" height="40" >
                COD <strong>SHOP</strong>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="form-cari2 d-flex ms-auto my-4 my-lg-0 ms-auto me-3 ">  
              <input class="form-control me-2" type="search" placeholder="Search Game & Voucher" aria-label="Search">                
            <button style="min-height: 42px;" class="btn btn btn-light" type="" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"><i class="tombol-cari fas fa-search"></i></button>          
          </form>

            <form class="form-cari d-flex ms-auto my-4 my-lg-0 ms-auto me-3 "> 
              <div class="button-2 mt-1 mb-1 collapse collapse-horizontal card-body" style="width: 30px;" id="collapseWidthExample">                
                <input class="form-control me-2" type="search" placeholder="Search Game & Voucher" aria-label="Search">               
              </div> 
              <button style="min-height: 42px;" class="btn btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"><i class="tombol-cari fas fa-search"></i></button>          
            </form>
            
          <ul class="navbar-nav ms-auto text-center">

            



            <a class="home1">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index1.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </a>
              
            </ul>
            
          </div>
        </div>
      </nav>

      <!--gambar slide/carousel-->
    <div class="container ">
      <div id="carouselExampleIndicators" class="carousel slide mt-1 " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded">
          <div class="carousel-item active">
            <img src="https://telegra.ph/file/5608b98ceee83bf1053f1.jpg" class="d-block img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://telegra.ph/file/324f875f6742de0f5d9e2.jpg" class="d-block img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://telegra.ph/file/7f10d4643b41cc21e1817.jpg" class="d-block img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

<!--kategori-->
<!--div class="container mt-4">
  <div class="judul-kategori rounded">
    <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
  </div>
  <div class="row text-center row-container mt-1 rounded ">
    <div class="col-lg-2 col-md-3 col-sm-4 col-9 ">
      <div class="menu-kategori">
        <a href="#"><img src="https://tse4.mm.bing.net/th?id=OIP.vsztxOMOOOp49zH731hKgAAAAA&pid=Api&P=0" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">
      <div class="menu-kategori">
        <a href="#"><img src="https://tse4.mm.bing.net/th?id=OIP.vsztxOMOOOp49zH731hKgAAAAA&pid=Api&P=0" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="https://cdn4.buysellads.net/uu/1/127419/1670531697-AdobeTeams.jpg" class="img-category mt-3" alt=""></a>
        <p class="mt-1">baju</p>
      </div>
    </div>
    
  </div>
</div-->


<form action="/hom" method="POST">
                    @csrf

                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>

<a href="#topup-scroll" class="text-decoration-none">
  <div class="container mt-4">
  <div class="judul-kategori rounded bg-gradient-light text-dark">
    <h5 class="text-center" style="margin-top: 5px;"><strong>TOP-UP SEKARANG</strong></h5>
  </div>
</div>
</a>

<div class="container mt-1" id="topup-scroll">
  
  <div class="row">

  
  <a href="{{ route('ml') }}"  class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" href="ml/" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="" class="card-title" >MOBILE LEGEND</h5>
         </div> 
     </div>
    </div>
  </a>

  <a href="ff/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="valo/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>
  
  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>
  
  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2">
    <div class="c">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  <a href="ml/" class="text-decoration-none col-lg-3 col-md-2 rounded mt-2">
    <div class="">
      <div class="card text-center bg-dark text-white">
        <img src="https://tse2.mm.bing.net/th?id=OIP.qnbdLYDGS_uup1A0y0xLtAAAAA&pid=Api&P=0" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 href="#" class="card-title ">MOBILE LEGEND</h5>
    </div> 
    </div>
    </div>
  </a>

  </div>
</div>

<BR><BR></BR></BR>

<footer class="bg-light p-5 mt-5 text-dark text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <a>
          <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png" width="60" height="40" class="me-0" alt="">
        </a>
        <span class="ms-0">Made by <a link href="https://instagram.com/jokowi" class="text-decoration-none text-primary fw-bold ">JOKOWI</a>
        </span>
        
<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4768462,4,430,112,75,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4768462&101" alt="" border="0"></a></noscript>

<!-- Histats.com  END  -->
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>