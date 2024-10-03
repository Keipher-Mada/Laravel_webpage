<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tsuki</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">
    

    <!-- icons
    ================================================== -->
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/Tsuki.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/Tsuki.png">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>

    <div id="page" class="s-pagewrap">


        <!-- # navbar 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.html">
                            <img src="images/icons/Tsuki.png" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
                    <ul>
                        <li class="current"><a href="#Hero" class="smoothscroll">Top</a></li>
                        <li><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#menu" class="smoothscroll">Menu</a></li>
                        <li><a href="#About" class="smoothscroll">About</a></li>
                        @if (Route::has('login'))
                           
                                @auth
                                    <li>
                                       <x-app-layout>
                                        </x-app-layout>
                                    </li>
                                        
                                @else
                                    <li><a href="{{ route('login') }}">
                                        Log in</a></li>

                  </nav>
                        
                 </li>
         
                       @if (Route::has('register'))
                             
                   <div class="s-header__cta">
                       <a href= "{{ route('register') }}" class="btn btn--stroke s-header__cta-btn">Register and book now</a>
                        @endif
                     @endauth

                   @endif
                </div>

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- intro
            ----------------------------------------------- -->
            <section id="Hero" class="s-intro target-section">

            <div class="s-intro__bg"></div>
               <div class="video-container"> 
                     <video class="video" playsinline autoplay muted control loop>
                       <source src="images/Food.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                    </video>
                </div>

                

                <div class="row s-intro__content">

                    <div class="column lg-12 s-intro__content-inner">
                        <div class="s-intro__content-left">
                            <h1 class="s-intro__content-title">
                            Food made<br>
                            from the Heart.
                            </h1>
                        </div>
                        <div class="s-intro__content-right">
                            <img id="stars" src="images/icons/Stars.png">
                            <p class="s-intro__content-desc body-text-2">
                            Awrad wining Michelin 3 star Japanese restuant,
                            from the hreat of London to people around the world
                            </p>

                            </div>
                        </div>
                    </div> <!-- s-intro__content-inner -->

               
 
                <div id="intro" class="s-intro__scroll">
                    <a href="#about" class="smoothscroll">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: rotate(270deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <span class="u-screen-reader-text">Scroll</span>
                    </a>
                </div> <!-- s-intro__scroll -->

            </section> <!-- end s-intro -->


            <!-- about
            ----------------------------------------------- -->
            
                <!-- intro info -->
                <div class="s-about__info">

                    <div class="row section-header">
                        <div class="column lg-6 stack-on-1000 title-block">
                            <h2 id="title">You entered Japan when you come to our restaurant</h2>
                        </div>
                        <div class="column lg-6 stack-on-1000 desc-block">
                            <p class="desc lead">
                            From the interior design to our services and ingredients,
                            everything is expertly crafted to give you the most authentic experience.
                            </p>
                        </div>
                    </div>
                    <img id="banner" src="/Images/shop.jpg">
                    
                    <div class="row s-about__info-slider-block">
                       

                            <div class="swiper-container s-about__info-slider">
                                <div class="swiper-wrapper">

                                    <div class="s-about__info-slide swiper-slide">
                                        <h4 class="h5">Awrad winning chef & team</h4>
                    
                                        <p>
                                         Our head chef- Kimura Tawakuchi and his team has 30 years of experience in the industry and accumulated over 50 awards over the years.
                                        </p>
                                    </div>  <!-- end s-about__info-slide  -->
                    
                                    <div class="s-about__info-slide swiper-slide">
                                        <h4 class="h5">Fish</h4>
                    
                                        <p>
                                        The fish we serve is frozen and delivered freshly from Tokiyo combined with seasonal, catched-on-the-day locally sourced fish to bring joy to your palate.
                                        </p>
                                    </div>  <!-- end s-about__info-slide  -->
                    
                                    <div class="s-about__info-slide swiper-slide">
                                        <h4 class="h5">Meat</h4>
                    
                                        <p>
                                        Top graded meat presented in way you have never seen before.
                                        </p>
                                    </div>  <!-- end s-about__info-slide  -->
                    
                                    <div class="s-about__info-slide swiper-slide">
                                        <h4 class="h5">Tea</h4>
                    
                                        <p>
                                        Our Matcha expert present customers with an authentic, true reflection of a matcha tea house experience in the cup.
                                        </p>
                                    </div>  <!-- end s-about__info-slide  -->

                                </div> <!-- swiper-wrapper -->

                                <div class="swiper-pagination"></div>

                            </div> <!-- end swiper-container -->

                        </div>
                    </div> <!-- end s-about__info-slider-block -->

                </div> <!-- end s-about__info -->


      <!-- menu -->
           <section class="menu" id="menu">
              <div class="left">
              <div>
                  <span>Menu</span>
                  <h1 id="title">Seasonal menu based on the day</h1>
                  <p> Our 5-course menu is based on what is best available on the season and the day by our award-winning head chef,
                    offering a different experience on every visit. </p>
                  <p id="notes">*please let us know in advance during your booking should you require any dietary adjustment.</p>
              </div>
             </div>

               <div class="slider">
              <ul>
              <li style="background-image: url(/images/1293.jpg)">
                  <div class="center-y"></div>
              </li>
              <li style="background-image: url(/images/1294.jpg)">
                  <div class="center-y"></div>
              </li>
              <li style="background-image: url(/images/1295.jpg)">
                  <div class="center-y"></div>
              </li>
              </ul>
                 <ul>
                    <nav id="food-slide">
                       <a href="#"></a>
                       <a href="#"></a>
                       <a href="#"></a>
                    </nav>
                </ul>
                   </div>
             </section>

            </section> <!-- end s-about -->


            <!-- About
            ----------------------------------------------- -->
            <section id="About" class="s-pricing target-section">
                <div class="row s-pricing__content">

                    <div class="column lg-4 md-12 s-pricing__header">
                        <h3 class="h2">Address & pricing</h3>
                        <p>Address: 33 Fantasy street, London, L1 3TW</p>
                                        <p> Opening hours: <br>
                                        Monday: closed <br>
                                        Tuesday: 1800 - 2200<br>
                                        Wednesday: 1800 - 2200 <br>
                                        Thursday: 1700 - 2200<br>
                                        Friday: 1700 - 2300<br>
                                        Saturday: 1700 - 2300<br>
                                        Sunday: 1700 - 2300<br>
                                        </p>
                             <p>
                             *Reservation only, £250 per head for a 5-course menu. Drinks and alcohol are included and
                             you can choose from a small selection hand-picked by our chef for a full experience.
                            </p>
                    </div> <!-- end s-pricing__header -->

                    <div class="column lg-8 md-12 s-pricing__plans">
                        <div class="row plans block-lg-one-half block-tab-whole">
                          <div class="right">
                            <img id="front" src="images/front.jpg">
                         </div>
                     </div> <!-- end s-pricing__content -->
            </section> <!-- end pricing -->

        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer footer">

            <div class="row s-footer__top">
    
            <div class="row s-footer__bottom">
                <div class="column lg-5 md-6 stack-on-900">
                    <div class="footer__logo">
                        <a href="index.html">
                            <img src="images/icons/Tsuki.png" alt="Homepage">
                        </a>
                         <p>
                         Lraravel powered website created by Keipher Dubber. Template was used for the admin login and social media section.
                        </p>
                    </div>
                   
    
                    <ul class="s-footer__social">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="column lg-6 stack-on-900 end">
                    <ul class="s-footer__site-links">
                        <li class="current"><a href="#intro" class="smoothscroll">Top</a></li>
                        <li><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#menu" class="smoothscroll">Menu</a></li>
                        <li><a href="#About" class="smoothscroll">About</a></li>
                    </ul>
    
                    <p class="s-footer__contact">
                        Do you have a question? reach out: <br>
                        <a href="mailto:#0" class="s-footer__mail-link">k.dubber17@gmail.com</a>
                    </p>
    
                    <div class="ss-copyright">
                        <span>© Tsuki</span> 
                        <span>Created by <a href="https://github.com/Keipher-Mada">Keipher Dubber</a></span>
                    </div>
                </div>
    
            </div>
    
            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#Hero">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"></path></svg>
                </a>
            </div> <!-- end ss-go-top -->
    
        </footer> <!-- end footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>