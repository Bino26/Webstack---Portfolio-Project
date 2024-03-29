<?php
include('bd.php');
// enregistrement de l'image dans le dossier
if(isset($_POST["send"])){
$nom =addslashes($_POST["name"]) ;
$typepub  =addslashes($_POST["email"]) ;
$descr =addslashes($_POST["pays"]) ;
$expli =addslashes($_POST['num']);
$parent =addslashes($_POST['parent']) ;
$comm =addslashes($_POST['commune']) ;
$select =addslashes($_POST["select"]) ;
$target_dir = "asset/";
$target_file = $target_dir . basename($_FILES["plat"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["plat"]["tmp_name"]);
  if($check !== false) {
    // echo "c'est bien une image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "le fichier est different d'une image.";
    $uploadOk = 0;
  }
  // renomer l'image
$temp = explode(".", $_FILES["plat"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);
$finaldestination = $target_dir .$newfilename;

if($uploadOk == 0){
    echo"image non enregistré";

}else{
    if(move_uploaded_file($_FILES["plat"]["tmp_name"],"" . $finaldestination)) {
        
      $sql = "INSERT INTO `info` (`name`, `email`, `pays`,`num_etu`,`tel_pa`,`commune`,`selecte`,`img`)
     VALUES ('$nom','$typepub','$descr','$expli','$parent','$comm','$select','$finaldestination')        
      ";
    }
    if(mysqli_query($conn, $sql)){
      echo"<div class='dem'>Demande de Preinscription Envoyée</div>";
    }else{
      echo "error: ". $sql . "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>contact</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .dem{
      position: relative;
      height: 100px;
      width: 400px;
      border: 1px solid;
      text-align: center;
      top: 10px;
      background-color: green;
      right: 10px;
      font-size: 30px;
      color:wheat;
    }
  </style>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:berohark@gmail.com">contacts@uici.info</a>
        <i class="icofont-phone"></i>  +255 0707314314
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">UICI</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li class=><a href="contact.html">Contact</a></li>
          <li class="active"><a href="preinscri.php">Preinscription</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>PREINSCRIPTION UICI</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>preinscription</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <!-- <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div> -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">
        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <h3>
            PREINSCRIPTION UICI
            </h3>
          <div class="col-lg-10">
            <form action="" method="POST" role="form"  enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-3 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="votre nom & prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-3 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="votre Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-3 form-group">
                  <input type="text" class="form-control" name="pays" id="email" placeholder="votre pays" data-rule="email" data-msg="Please enter a valid pays" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-3 form-group">
                  <input type="number" class="form-control" name="num" id="email" placeholder="votre numero" data-rule="email" data-msg="Please enter a valid number" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="parent" id="subject" placeholder="contact Parent/Tuteur" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="commune" id="subject" placeholder="Commune" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <select name="select" class="form-control" id="">
                    <option value="droit">Sciences Juridique</option>
                    <option value="info">informatique et science du numeruque</option>
                    <option value="eco">Science Eco. et de Gest.</option>
                    <option value="mine">Mine , Petrole et Energie</option>
                </select>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="">COPIE DE BAC</label>
              <input type="file" class="form-control" name="plat" id="subject" placeholder="Commune" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name="send">envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          

      

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>UICI</span></strong>. TOUS DROIT RESERVE
        </div>
        <div class="credits">
          Designed by <a href="">devKC</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>