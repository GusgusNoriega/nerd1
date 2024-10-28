<!DOCTYPE html>

<html lang="en">

  <head>

    <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-TZ6T7G2');</script>

<!-- End Google Tag Manager -->

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="../img/favicon-1.png" />

    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" type="text/css" href="../slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css" />

    <link rel="stylesheet" href="../css/style.css" />

    <title>NERD - Landing Page Digital Minds</title>

  </head>

  <body>

    <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ6T7G2"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->



  <?php 

$myemails = 'francesca@nerdmedia.pe, alonso@nerdmedia.pe, cecilia@nerdmedia.pe, jeanpierre@nerdmedia.pe, gustavo@nerdmedia.pe, jimena@nerdmedia.pe';
$name = $_POST['name'];
$tel = $_POST['telephone'];
$email= $_POST['email'];
$message = $_POST['message'];

$cuerpo = '
<html>  
<body>  
<h1>¡Hola Nerd!</h1> 
<p>Tienes un nuevo mensaje:</p>
<p> <b>Nombre :</b> '.$name .'</p>
<p> <b>Teléfono :</b> '.$tel .'</p>
<p> <b>Email :</b> '.$email .'</p>
<p> <b>Mensaje :</b> '.$message .'</p>
</body> 
</html> 
';

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $name <$email>\r\n";

$to = $myemails;
$email_subject = "Contacto Nerd.pe";
mail($to, $email_subject, $cuerpo, $headers);
?>

<section class="loading">

<div class="snake"></div>

    <div class="cursor-eye">

      <img src="img/vermasv2.png" alt="">

    </div>

      <div class="boxes">        

        <div class="box box1"><span>N</span></div>

        <div class="box box2"><span>E</span></div>

        <div class="box box3"><span>R</span></div>

        <div class="box box4"><span>D</span></div>

      </div>

    </section>

    <section class="thankspage">

      <div class="container-thanks">

        <div class="content">

          <div class="top">

            <a class="closeinterna" href="">

              <img src="../img/closemenu.svg" alt="close"

            /></a>

          </div>

          <div class="text">

            <h2>¡GRACIAS!</h2>

            <p>En breve nos contactaremos</p>

          </div>

        </div>

      </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>

    <script src="../slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

    <script src="../js/main.js"></script>

  </body>

</html>

