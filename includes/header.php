<?php include('head.php'); ?>

<body class="<?= 's_'.SECCION ?>">

<header class="cabecera" id="home">
   <div class="container">
     <div class="row">
       <div class="buscador">
        <a href=""><span class="material-icons">search</span></a>
         <input type="text" placeholder="Qué esta pasando?" value="">
       </div>
       <div class="logo">
        <a href="">  <?php include('images/wabi.svg'); ?> </a>
       </div>
       <div class="menu">
          <ul class="lista">
            <li class="lenguaje">
              <div class="js-desplegable idioma">
                <a class="js-desplegable-enlace">
                  <?php switch (IDIOMA) {
                  case 'es':
                  echo "ES";
                  break;
                  case 'en':
                  echo "EN";
                  break;

                  } ?>
                <span class="material-icons don">expand_more</span>
                </a>
                <ul class="js-desplegable-contenido" >
                  <li><a href="<?=BASE_URL?>en/">EN</a></li>
                  <li><a href="<?=BASE_URL?>es/">ES</a></li>
                  <li><a href="<?=BASE_URL?>es/">GR</a></li>
                  <li><a href="<?=BASE_URL?>es/">MAL</a></li>
                  <li><a href="<?=BASE_URL?>es/">ITA</a></li>
                  <li><a href="<?=BASE_URL?>es/">RU</a></li>
                  <li><a href="<?=BASE_URL?>es/">PR</a></li>
                  <li><a href="<?=BASE_URL?>es/">ARA</a></li>
                  <li><a href="<?=BASE_URL?>es/">HIN</a></li>
                </ul>
              </div>
            </li>
          </ul> 
          <a href=""><span class="material-icons-outlined">person_outline</span></a>
          <a href="" class="cart">
            <span class="material-icons-outlined">shopping_cart</span>
            <p>0</p>
          </a>
       </div>
     </div>
   </div>
   <div class="banda-verde">
     <div class="container">
       <div class="row">
         <ul>
           <li>
            <a href="" class="<?= SECCION == 'home' ? 'activo' : '' ?>"> promociones</a> 
           </li>
            <li>
             <a href="">alcohol</a>
           </li>
            <li>
             <a href="">beverages</a>
           </li>
            <li>
             <a href="">groceries</a>
           </li>
            <li>
             <a href="">beauty and healthcare</a>
           </li>
           <li>
            <a href="">home cleaning</a>
           </li>
         </ul>
       </div>
     </div>
   </div>
</header>
<div class="phone">
  <input type="radio" name="s" id="s1"  >
  <input type="radio" name="s" id="s2">
  <input type="radio" name="s" id="s3">
  <input type="radio" name="s" id="s4" checked="checked">
  <label for="s1"><span class="material-icons icos">search</span></label>
  <label for="s2"><span class="material-icons-outlined icos">person_outline</span></label>
  <label for="s3"> <span class="material-icons-outlined icos">shopping_cart</span></label>
  <label for="s4">
    <button class="hamburger hamburger--efecto visible-xs">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>

  </label>
  <div class="circle"></div>
  <div class="phone_content">
    <div class="phone_bottom">
      <span class="indicator"></span>
    </div>
  </div>
</div>
<main>