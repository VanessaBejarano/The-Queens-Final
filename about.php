<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre Nosotros</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/img-sobre.png" alt="">
      </div>

      <div class="content">
         <h3>¿Por qué somos unas Queens?</h3>
         <p>
         Queens es tu destino definitivo para la belleza en línea, ofreciendo una amplia gama de productos de maquillaje para realzar tu belleza natural. Desde los básicos diarios hasta los looks más glamurosos, Queens tiene todo lo que necesitas para descubrir tu reina interior. Nuestra tienda online ofrece una experiencia de compra cómoda y fácil, con una variedad de productos de alta calidad a precios asequibles. En Queens, creemos que cada mujer merece sentirse como una reina, y nuestro objetivo es ayudarte a brillar con confianza. ¡Explora nuestra colección y descubre la reina que llevas dentro!
         </p>
         <a href="contact.php" class="btn">Contactanos</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Reseñas de nuestras Queens </h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/img-rese1.png" alt="">
         <h1></h1>
         <p>¡Estoy absolutamente enamorada de Queens! Su selección de productos es increíble y siempre encuentro exactamente lo que necesito. ¡Definitivamente es mi tienda de maquillaje en línea favorita!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>María, 22 años</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/img-rese2.png" alt="">
         <h1>Compromiso con la Calidad</h1>
         <p>Queens ha cambiado mi rutina de belleza para mejor. Sus productos son de alta calidad y su servicio al cliente es excepcional. ¡Siempre recomiendo Queens a todas mis amigas!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ana, 24 años</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/img-rese3.png" alt="">
         <h1>Ética y Transparencia</h1>
         <p>Como maquilladora profesional, siempre busco los mejores productos para mis clientes. Queens nunca me decepciona. Su gama de productos es impresionante y siempre están a la vanguardia de las últimas tendencias de maquillaje.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Laura, 26 años</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/img-rese4.png" alt="">
         <h1>Atención al Cliente Excepcional</h1>
         <p>¡Amo Queens! Sus productos son increíbles y siempre llegan a tiempo. Además, su sitio web es muy fácil de usar. ¡Hacer compras de maquillaje nunca ha sido tan fácil!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vanessa, 21 años</h3>
      </div>
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>