<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data pada form berdasarkan pilihan Combo Box di PHP</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    body{
    background-color: #c7cce9;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: rgb(247, 250, 250);
}
    .rdio:hover { cursor: pointer; background-color: #669ef1; }
    .rdio:focus { background-color: #669ef1; }
   .label:active {background-color: #669ef1;}
   .radio { visibility: hidden;}
   .hh{color:#669ef1}
</style>
</head>
<body>
<div class="container">
    <h4>Menampilkan Data pada form berdasarkan pilihan Combo Box di PHP</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <div class="form-group">
            <label for="sel1">Pilih Mahasiswa:</label>
            <select class="form-control" name="nik">
                
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Pilih">
        </div>
    </form>
    <h2>Input Data</h2>

  

        <div class="form-group">
            <label>NIK:</label>
            <input type="text" name="nik" value="" class="form-control" required />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value=" ?>" class="form-control"  required/>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lhr" value="" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="sel1">Jurusan:</label>
            <select class="form-control" name="jurusan">
                
            </select>
        </div>
        <div class="form-group">
            <label>Umur:</label>
            <input type="number" name="umur" value="" class="form-control"required/>
        </div>
</div>



<div class="container mt-4">
<div class="form-check">
    
  <div><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><img src="https://kelasprogrammer.com/wp-content/uploads/2019/09/menampilkan-data-pada-form-berdasarkan-pilihan-combo-box.png" alt="Logo" width="60" height="40">
</div>
  <label class="form-check-label" for="flexCheckDefault">
    Default checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div>
</DIV>


<select  class="form-select mt-5 container mb-5" multiple aria-label="multiple select example">
  <option selected>Open this select menu <img src="https://kelasprogrammer.com/wp-content/uploads/2019/09/menampilkan-data-pada-form-berdasarkan-pilihan-combo-box.png" alt="Logo" width="60" height="40"></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<div>
<select class="form-select my-5 container" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <div>
  <option value="1">One </option>
</option><img src="https://kelasprogrammer.com/wp-content/uploads/2019/09/menampilkan-data-pada-form-berdasarkan-pilihan-combo-box.png" alt="Logo" width="60" height="40"></option>
</div>
  <option value="3">Two</option>
  <option value="2">Three</option>
</select>
<img src="https://kelasprogrammer.com/wp-content/uploads/2019/09/menampilkan-data-pada-form-berdasarkan-pilihan-combo-box.png" alt="Logo" width="60" height="40"></option>

  </div>

  <img src="https://cdn1.codashop.com/S/content/common/images/mno/MLBB-New-Price_Codashop-Banner.jpg" alt="Logo" width="60" height="40"></option>


  <form class="d-flex mx-3 mt-3 rdioa mb-5">
  <label class="button p-dm form-control b1 me-2 btn btn-outline-info hi" >
     <input type="radio" class="radio" name="emoji" id="emoji"  >
     <img src="https://cdn1.codashop.com/S/content/common/images/mno/MLBB-New-Price_Codashop-Banner.jpg" width="100px">
 </label>
 <label class="rdio p-dm form-control b1 me-2 btn btn-outline-info hi" id="button"  type="button"  value = "button" onclick="setColor('button', '#101010')">
     <input type="radio"  class="radio" name="emoji" id="emoji" >
     <img src="https://cdn1.codashop.com/S/content/common/images/mno/MLBB-New-Price_Codashop-Banner.jpg" width="100px">
 </label>
 <label class="rdio p-dm form-control b1 me-2 btn btn-outline-info hi">
     <input type="radio"  class="radio"  name="emoji" id="emoji">
     <img src="Very Sad Emoji.png" width="100px">
 </label>
  <label class="rdio p-dm form-control b1 me-2 btn btn-outline-info hi">
      <input type="radio"  class="radio"  name="emoji" id="emoji">
      <img src="Loudly Crying Face Emoji.png" width="100px">
  </label>
</form>


<input type="button" id="button" value = "button" style= "color:white" onclick="setColor('button', '#101010')";/>

<div class="d-flex mx-3 mt-3 buttons mb-5">             
              <button data-id="myorder" type="reset" class="button p-dm form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Dimond</h6></button>
              <button data-id="myproducts" class="button p-dm form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
              <button data-id="mysupplier" class="button  p-dm form-control b1 me-2 btn btn-outline-info hi"><img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/5000orMore_MLBB_Diamonds.png" alt="Logo" width="60" height="60" ><h6 class="my-3  text-center">Diamond</h6></button>
            </div>



            <input type="button" id="button" value = "button" style= "hh" onclick="setColor('button', '#101010')";/>
            <input type="radio" name="emoji" id="emoji">

            <script>
function setColor(btn, color){
    var count=1;
    var property = document.getElementById(btn);
    if (count == 0){
        property.style.backgroundColor = "#FFFFFF"
        count=1;        
    }
    else{
        property.style.backgroundColor = "#7FFF00"
        count=0;
    }

}
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>