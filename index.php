<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=671c0ce4&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container_new" style="background-image:url('bg.jpg');">
<div class="container">
<div class="row mt-3 text-center">
  <div class="col text-danger">
  <div class="col">
<h1>The Best Movie</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="g.1.1.1.jpeg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title text-danger">Ant-Man and the Wasp: Quantumania </h5>
        <p class="card-text ">Scott Lang and Hope Van Dyne, along with Hank Pym and Janet Van Dyne, explore the Quantum Realm, where they interact with strange creatures and embark on an adventure that goes beyond the limits of what they thought was possible.   </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="g.2.2.3.jpeg" class="card-img-top" height="420px">
      <div class="card-body">
        <h5 class="card-title text-danger">Creed III</h5>
        <h6 class="card-text">Adonis has been thriving in both his career and family life, but when a childhood friend and former boxing prodigy resurfaces, the face-off is more than just a fight.</div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="g.3.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title text-danger">Epic Tales</h5>
        <p class="card-text">Life in Yolcos, a beautiful and prosperous port city in ancient Greece, is peaceful until the population is threatened by the wrath of Poseidon. A young, adventurous mouse and the cat who adopted her help the aged Jason and his Argonauts in their quest to save the city.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="g.4.jpg" class="card-img-top" height="370px">
      <div class="card-body">
        <h5 class="card-title text-danger">Detective Conan: Episode of Ai Haibara ~ Black Iron Mystery Train</h5>
        <p class="card-text">The movie will focus on Ai Haibara's past and will reconstruct the Mystery Train arc from the television anime.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="g.5.jpg" class="card-img-top" height="330px">
      <div class="card-body">
        <h5 class="card-title text-danger">Illegal Hayatlar</h5>
        <p class="card-text">Mahsun, the owner of an illegal casino, is struggling to cope with police raids. He decides to continue his business under the guise of a fake political party. This idea leads him and his friends on an adventure they never expected.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="g.6.jpg" class="card-img-top" height="340px">
      <div class="card-body">
        <h5 class="card-title text-danger">Tina & Bettina 2: The Comeback</h5>
        <p class="card-text">10 long years have passed. Things are not so great anymore. Tina married an 89-year-old, who just refuses to die. Bettina tries to keep her spirits up in a rotten marriage looking after the ungrateful man's children.</p>
               </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
