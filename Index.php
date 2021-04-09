<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/styles.css">

	<!-- =====BOX ICONS===== -->
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

	<title>My Diary</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box

}


    
</style>
<body>
	<!--===== HEADER =====-->
	<header class="l-header">
		<nav class="nav bd-grid">
			<div>
				<a href="#" class="nav__logo">My Diary</a>
			</div>

			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
					<li class="nav__item"><a href="#about" class="nav__link">About</a></li>

					<li class="nav__item"><a href="#creator" class="nav__link">Creators</a></li>
					<li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
				</ul>
			</div>

			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main"> 
          
          <p id="homeRoundedRect"></p>
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">My Diary,<br>Your <span class="home__title-color">Stories</span><br> Safe Space </h1>

                    <a href="login.php" class="button">Get Started</a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/perfil2.png" alt="">
                </div>
               
                </div>
             
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="diary">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">My diary</h2>
                        <p class="about__text">A web app for everyone to put their everyday stories to keep.A place to save memories in a form of text and security.</p>           
                    </div>                                   
                </div>
            </section>
            

            <!--===== Creator =====-->
            <section class="work section" id="creator">
                <h2 class="section-title">Creators</h2>

                <div class="work__container bd-grid">
                    <div class="creator__img">
                       
                             <img src="assets/img/Pat.png" alt="Patrcia">
                           
                            <p class="creator_title">Programmer/Desinger</p>
                       <p class="creator_description">Patricia Caretiro</p>
                    </div>
                    <div class="creator__img">
                     
                        <img src="assets/img/Kris.png" alt="Kristofferson">
                    
                       <p class="creator_title">Programmer</p>
                       <p class="creator_description">Kristofferson Patawaran</p>
                    </div>
                    <div class="creator__img">
                       
                        <img src="assets/img/Carla.png" alt="Carla Faye">
                    
                       <p class="creator_title">Programmer/Designer</p>
                       <p class="creator_description">Carla Faye Milarpis</p>
                    </div>
                    
                </div>
            </section>


        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Safe Space</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2021 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        
        <script src="assets/js/main.js"></script>
    </body>
</html>