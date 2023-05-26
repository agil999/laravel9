<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" href="style.css">
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

   
.fc{
    min-width: 400px;
    right: 80px;
    position: absolute;
}

.tombol-cari{
  border-radius: 50%;
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
            position: absolute;
            right: 999px;

            
        }
        }
    




@media screen and (max-width:992px){   
    .home1{
        margin-top: -70px;      
    }
    }
    

.petunjuk
{
    font-size: 11px;
    top: 100p0x;}

article {
   

    max-height: 80px;
    overflow: hidden;
    transition: 1s;
    text-align: justify;
    
   
  }

 

  article.open {
    max-height: 1000px;
  }

  .artikle {
   

    max-height: 80px;
    overflow: hidden;
    transition: 1s;
    text-align: justify;
    
   
  }

 

  .artikle.open {
    max-height: 1000px;
  }

  .b-selengkapnya{
    background-color: transparent;
    position: absolute;
        margin-bottom: 99px
  }

  .b-selengkap{
    background-color: transparent;
  }
  @media screen and (min-width:777px){
    .b-selengkap{
        visibility: hidden;
        position: absolute;
        margin-bottom: 99px;
    }
  }

  @media screen and (min-width:777px){
    article{
        max-height: 1000px
    }
  }

  button:hover {
    cursor: pointer;
   
  }

  .deskripsi-ml
  {
    font-size: 13px;
  }

  .all-contain{
    background-color: #1e1d25;
  }

  .coba
  {
    margin-left: 35%;
  }
   





.img-video
  {
    flex-basis: 34%;
  }

  .right-sidebar
  {
    flex-basis: 64%;
  }
  
  .img-video img{
    width: 100%;
  }

  .side-menu{
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
  }

  .side-menu img{
    width: 100%;
  }

  .side-menu .small-thumbnail{
    flex-basis: 69%;
  }

  .img-video{
    background-color:  #c7cce9;
  }

  @media screen and (max-width:777px){
    .img-video{
        flex-basis: 100%;
    }
  }

  @media screen and (max-width:777px){
    .right-sidebar{
        flex-basis: 100%;
    }
  }

 



::selection{
  color: #fff;
  background: #2980b9;
}

@media screen and (max-width:992px){
  .search-box{
    visibility: hidden;
  }
}
.search-box{
  position: relative;
  height: 35px;
  width: 35px;
  border-radius: 10%;
  box-shadow: 5px 5px 30px rgba(0,0,0,.2);
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  
}
.search-box.active{
  width: 300px;
 
}
.search-box input{
  width: 100%;
  height: 100%;
  border: none;
  border-radius: 10px;
  background: #fff;
  outline: none;
  padding: 0 60px 0 20px;
  font-size: 15px;
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
 
  position: absolute;
  right: 26%;
}
.search-box input.active{
  opacity: 1;
}
.search-box input::placeholder{
  color: #a6a6a6;
}
.search-box .search-icon{
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  height: 40px;
  width: 40px;
  background: #fff;
  border-radius: 40%;
  text-align: center;
  line-height: 40px;
  font-size: 22px;
  color: #2980b9;
  cursor: pointer;
  z-index: 1;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.search-box .search-icon.active{
  right: 0px;
  height: 40px;
  line-height: 40px;
  width: 40px;
  font-size: 20px;
  background: #2980b9;
  color: #fff;
  transform: translateY(-50%) rotate(360deg);
}
.search-box .cancel-icon{
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 25px;
  color: #fff;
  cursor: pointer;
  transition: all 0.5s 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  
}
.search-box .cancel-icon.active{
  right: -30px;
  transform: translateY(-50%) rotate(360deg);
  
  position: absolute;
  right: 17%;}
  
.search-box .search-data{
  text-align: center;
  padding-top: 7px;
  color: #fff;
  font-size: 18px;
  word-wrap: break-word;}
.search-box .search-data.active{
  display: none;
}


.panels { display: none; }

.show { display: block; }
.button:hover { cursor: pointer; background-color: #669ef1; }

.ho{font-size: 15px; width: 10%; height: 10%; margin-top: -30px; position: absolute; background-color: transparent;}
.sip {background-color: #669ef1; color: #000000;}

.diad{position: absolute; margin-left: 40%;}
.b-qris img{ margin-top: 10px; margin-bottom: 10px;}

.panel {
  display: none;
}

.button img  {
  margin-right: 5px;
  vertical-align: middle;
}

.p-dm{
  width: 18%;
}
@media screen and (max-width:777px){
  .p-dm{
      width: 50%;
  }
}

.panel{
  width: 19%;
  margin-right: 1%;
 
}
@media screen and (max-width:777px){
  .dm{
      
     width: 48%;
     margin-right: 2%;
      
  }
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

<!--
          
            <form class="form-cari d-flex ms-auto my-4 my-lg-0 ms-auto me-3 "> 
              <div class="button-2 mt-1 mb-1 collapse collapse-horizontal card-body" style="width: 30px;" id="collapseWidthExample">                
                <input class="form-control me-2" type="search" placeholder="Search Game & Voucher" aria-label="Search">               
              </div> 
              <button style="min-height: 42px;" class="btn btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"><i class="tombol-cari fas fa-search"></i></button>          
            </form>
          -->
           

          <ul class="navbar-nav ms-auto text-center">

            



            <a class="home1">

              <div class="search-box me-2" >
                <input  type="text" placeholder="Mau cari apa?">
                <div class="search-icon">
                  <i class="fas fa-search" style="min-height: 42px;"></i>
                </div>
            <div class="cancel-icon " >
                  <i class="fas fa-times"></i>
                </div>
          <div class="search-data">
          </div>
          </div>
          <script>
                const searchBox = document.querySelector(".search-box");
                const searchBtn = document.querySelector(".search-icon");
                const cancelBtn = document.querySelector(".cancel-icon");
                const SearchActiveBtn = document.querySelector(".search-icon.active")
                const searchInput = document.querySelector("input");
                const searchData = document.querySelector(".search-data");
                searchBtn.onclick =()=>{
                  searchBox.classList.add("active");
                  searchBtn.classList.add("active");
                  
                  searchInput.classList.add("active");
                  cancelBtn.classList.add("active");
                  searchInput.focus();
                  if(searchInput.value != ""){
                    var values = searchInput.value;
                    searchData.classList.remove("active");
                    searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>";
                  }else{
                    searchData.textContent = "";
                  }
                }
                cancelBtn.onclick =()=>{
                  searchBox.classList.remove("active");
                  searchBtn.classList.remove("active");
                  searchInput.classList.remove("active");
                  cancelBtn.classList.remove("active");
                  searchData.classList.toggle("active");
                  searchInput.value = "";
                }
              </script>
          
          <form class="form-cari2 d-flex ms-auto mt-5 my-lg-0 ms-auto me-0 ">  
            <input class="form-control fm me-2" type="search" placeholder="Search Game & Voucher" aria-label="Search">
            <div class="tombol-cari">
          <button style="min-height: 42px;" class="btn btn btn-light"  ><i class="fas fa-search"></i></button>          
        </div>
        </form>
              
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


     
<!--pilihan-->
<div class="play-container container-fluid ms-auto mt-4 rounded">
    <div class="row ">
     
      <div class="img-video text-left col-lg-4 col-md-2 col-sm-3 col-6 mt-0 text-dark mt-2">
        <a href=""><img src="https://telegra.ph/file/5608b98ceee83bf1053f1.jpg" alt=""></a>
        
        <article id="content" class=""> <h6 class="deskripsi-ml mt-3 " >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet tortor sem, vel suscipit nunc blandit dignissim. Nulla lobortis molestie ornare. Fusce finibus aliquet libero, at ornare mauris accumsan vel. Nunc non porta sapien. Nam justo felis, sagittis id ornare sed, hendrerit ut nulla. Aliquam vestibulum urna id lectus scelerisque, rhoncus condimentum lorem lacinia. Aliquam mattis lacus urna, nec vulputate elit pulvinar ut. Morbi aliquam quis nunc ac ullamcorper. Suspendisse mattis metus a nisi lacinia, et placerat nisi tristique.

Cras ac neque massa. Maecenas placerat sollicitudin ex, in varius elit mollis dignissim. Integer facilisis dui tempor, porta felis aliquam, vehicula neque. Ut auctor quam arcu, a tristique mi fringilla eu. Cras tristique ullamcorper enim at sagittis. Vivamus vitae eros eros. Proin eu enim quis dui tempor pulvinar. Sed at lorem ac ante dapibus dictum vel id lectus.

Nunc eu purus lorem. Sed ut nibh aliquet, fringilla odio quis, dignissim orci. Sed id erat quis est porta interdum et ac velit. Proin scelerisque erat quam, nec ultricies mi rutrum sed. Vestibulum hendrerit massa ac pulvinar placerat. Nunc varius rutrum ligula, id interdum odio venenatis et. Aliquam in nulla mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis gravida est fermentum ultrices. Vivamus ut auctor augue. Integer sed facilisis lorem. Quisque a aliquet purus, eu iaculis mauris.

Praesent ullamcorper lacus lorem. Maecenas quis ante sit amet odio aliquet pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla tempus est id nunc vulputate, sit amet elementum dui pellentesque. Suspendisse potenti. Etiam nec feugiat leo. Vestibulum quis placerat massa. Aenean leo ligula, viverra vel tempus vitae, posuere ac ipsum. Nulla facilisi. Etiam ut sodales massa, nec scelerisque orci. Maecenas sit amet semper odio. Ut volutpat, turpis dignissim gravida finibus, tellus eros iaculis risus, at aliquam nunc nisl ac nisl.

Praesent vehicula et metus vel placerat. Donec consequat nunc eget augue rutrum vulputate. Praesent et ligula condimentum, molestie ante in, luctus orci. Proin sagittis scelerisque elit, lobortis blandit leo feugiat nec. Pellentesque gravida sapien eget nunc feugiat, egestas finibus nulla condimentum. In tempus congue auctor. Quisque lobortis bibendum ex, vel vulputate ex consectetur nec. Duis vestibulum feugiat augue, et dapibus arcu tristique eget. Vestibulum vitae blandit neque, rutrum vulputate magna. Fusce vel sodales tortor. Cras ut nulla aliquet, venenatis risus elementum, accumsan felis.</h6></article>
      
<button  class="b-selengkap text-primary text-decoration-none btn  btn-sm" type="button" onclick="lebihBanyak()">Baca Selengkapnya</button>
 
        <script type="text/javascript">
          const article = document.querySelector("#content");
          
          function lebihBanyak() {
              if (article.className == "open") {
                // lebih sedikit
                article.className = "";
                button.innerHTML = "Lebih banyak";
              } else {
                // lebih banyak
                article.className = "open";
                button.innerHTML = "Lebih sedikit";
              }
           }
           </script>    
         </div>
  
<form action="/checkout" method="POST">
@csrf 
      <div class="right-sidebar mt-2">
  
        <!--samping kanan-->
  <div class="bg-dark rounded ">
        <div class="side-menu ">
          <h5 href="#" class="card-title "style="margin-top:10px; margin-left:50px;"><strong>MASUKKAN USER ID</strong></h5>
                                 
          </div>
          <form class=" d-flex my-1 ms-3 me-3 mt-0 mt-3"> 
          <input class="usergame form-control me-2 text-center" type="text" name='qty' id='qty' placeholder="Masukkan User ID" aria-label="Search">                         
          <input class="usergame form-control me-2 text-center" type="text" name='name' id='name' placeholder="Masukkan User ID" aria-label="Search">                         
      <input class="usergame form-control me-2 text-center" type="text" name='phone' id='phone' placeholder="Masukkan User ID" aria-label="Search">                         
            <input class="idgame form-control  text-center" type="text" name='address' id='address' placeholder="( Zone ID )" aria-label="Search">             
           <!--button awal-->
          <button style="min-height: 42px m;" class="btn btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-question "></i></button>          
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             
          </div>
          <div class="modal-body">
            <img src="https://telegra.ph/file/5608b98ceee83bf1053f1.jpg" class=" img-fluid" alt="">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
          </div>
          </div>
          </div>
          </div>
          </form>
  
          <h5 class="petunjuk text-decoration-none text-secondary ms-3 mt-2 b-2 "><em>Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).</em></h5>
  
        </div>


  <!--2-->
        <div class="bg-dark rounded ">
          <div class="side-menu ">
            <h5 href="#" class="card-title mt-3 mb-2"style=" margin-left:50px;"><strong>PILIH NOMINAL TOP-UP</strong></h5>                    
            </div>
          
            <a class="ms-4 text-decoration-none text-light  ">Pilih Kategori</a>  

            <div class="d-flex mx-3 mt-3 buttons mb-5">             
              <button data-id="myorder" type="reset" class="button p-dm form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Dimond</h6></button>
              <button data-id="myproducts" class="button p-dm form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
              <button data-id="mysupplier" class="button  p-dm form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
            </div>

            <a class="ms-4 text-decoration-none text-light  ">Pilih Item</a>  

            <div class="container-fluid ">
            <div class=" mt-3 mx-2 buttons mb-5 row " id="myorder">
              
                       
                <button data-id="myorders" type="text" class="panel button form-control b1 btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3  bt text-center">3 Diamonds</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="11dm" type="reset" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3  bt text-center">11 Diamonds + 1 Bonus</h6><h class="mt-n3 text-danger-100">Dari</h><br><h8 class="text-danger-emphasis">Rp3.300</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt  text-center">17 Diamonds + 2 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">25 Diamonds + 3 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3  bt text-center">40 Diamonds + 4 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50ormore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">53 Diamonds + 6 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">77 Diamonds + 8 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3  bt text-center">154 Diamonds + 16 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt  text-center">217 Diamonds + 23 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt  text-center">256 Diamonds + 40 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt   text-center">367 Diamonds + 41 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/500orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt  text-center">503 Diamonds + 65 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/500orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">774 Diamonds + 101 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/1500orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">1708 Diamonds + 302 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel  button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">4003 Diamonds + 827 Bonus</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp1.500</h8></button>
                <button data-id="myorders" class="panel button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/TwilightPass_MLBB.png" alt="Logo" width="60" class="" height="60" ><h6 class="my-3 bt text-center">Twilight Pass</h6><h class="mt-n3">Dari</h><br><h8 class="">Rp151.928</h8></button>

                 </div>       
            </div>
<br><br><br>
           

            <div class="panels" id="myorderss">
              <div class="d-flex mx-3 mt-3 buttons mb-5">             
                <button data-id="myorderss" class="button form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diad</h6></button>
                <button data-id="myproduct" class="button form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
                <button data-id="mysupplier" class="button  form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
              </div>
            </div>



            <div class="panel" id="myorders"><p>Laptop, Earphone</p></div>
	<div class="panel" id="myproducts"><p>Earphone, smart watch</p></div>
	<div class="panel" id="mysupplier"><p>Amazon, E-kart</p></div>

            <h5 class="petunjuk text-decoration-none text-secondary ms-3 mt-2 b-2 "><em>Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).</em></h5>
  
          </div>
          <button type="submit"  class="btn btn-primary">Checkout</button>
                </form>
                </form>

         
          
           

          <!--3-->
          <div class="right-sidebar mt-2">
  
            <!--samping kanan-->
      <div class="bg-dark rounded ">
            <div class="side-menu ">
              <h5 href="#" class="card-title "style="margin-top:10px; margin-left:50px;"><strong>Pilih pembayaran</strong></h5>                                    
              </div>
            
              <div class="container-fluid">
                <div class="  mt-3 mx-2 ">
                           
                  <button  class=" d-flex button b-qris form-control "><img src="https://cdn1.codashop.com/S/content/common/images/mno/QRIS_ID_CHNL_LOGO.png" alt="Logo" width="186" class="" height="40"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
 
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png" alt="Logo"   >                  
                    
                    <p class="panels diad mt-1 "><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " ><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png" alt="Logo"   >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/DOKU_ATM_ID_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png" alt="Logo"   >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><a><img src="https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png" alt="Logo"  ><br><br>#collab dengan axis<br></a>              
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/Smartfren_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/SHOPEE_PAY_CHNL_LOGO.png" alt="Logo"   >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png" alt="Logo"   >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png" alt="Logo"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/CARD_PAYMENT_CHNL_LOGO.png" alt="Logo" >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png" alt="Logo" >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myorde" class=" d-flex button b-qris form-control mt-2 "><img src="https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png" alt="Logo" width="186" class="" height="40"  >                  
                    <p class="panels diad mt-1 " id="11dm"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp3.300</a></p>                  
                    <p class="panels diad mt-1 " id="myorders"><a class="text-decoration-none fw-bold text-body-secondary">Harga</a><br><a class="text-decoration-none fw-bold text-dark">Rp. 1.579</a></p>                  
                  </button>
                  <button data-id="myproduct" class=" button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
                  <button data-id="mysupplier" class="button form-control b1  btn btn-outline-info hi col-lg-3 col-md-2 col-sm-3 col-6 rounded mt-2"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
              
              </div>

              <h5 class="petunjuk text-decoration-none text-secondary ms-3 mt-2 b-2 "><em>Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).</em></h5>
      
            </div>
    
          
    </div>  
  </div> 
  </div>
  
  <form action="/checkout" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="qty" class="form-label">Mau Pesan Berapa?</label>
                        <input type="number" name="qty" class="form-control" id="qty"
                            placeholder="jumlah yang dipesan">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="masukan nama anda!">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No Telp</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            placeholder="masukan no hp!">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>



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
      </div>
    </div>
  </div>
</footer>

<script>
  const buttons = document.querySelectorAll('.button');
  const panel = document.querySelectorAll('.panel');
  const buttonss = document.querySelectorAll('.buttonss')
  const panels = document.querySelectorAll('.panels');
  const panelss = document.querySelectorAll('.panelss');

  
  
  
  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');

      panels.forEach((panel) => {
        if (panel.getAttribute('id') === id) {
          panel.style.display = 'block';
        } else {
          panel.style.display = 'none';
        }
      });
    });
  });
 
  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');

      panel.forEach((panel) => {
        if (panel.getAttribute('id') === id) {
          panel.style.display = 'block';
        } else {
          panel.style.display = 'block';
        }
      });
    });
  });

  
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>