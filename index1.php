<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<title>Новостной портал Кусь.ру</title>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		
		
		<link rel="stylesheet" href="css/font-awesome.min.css">

		
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		

    </head>
	<body>
		<header id="header">
			<div id="top-header">
				<div class="container">
					<div class="header-links">
					
    <div class="panel1">
						<ul>
							<li><a href="#"><b>О НАС</b></a></li>
							<li><a href="#"><b>КОНТАКТЫ</b></a></li>
							<li><a href="logout.php"><i class="fa fa-sign-in"></i><b>ВЫХОД</b></a></li>
                           
                           
						</ul>
					</div>
					 

					<a href="#x" class="overlay" id="login_form"></a>
<div class="popup">
   
    <p><b>Добро пожаловать на форму авторизации!</b></p>
    <div>
    	<form action="authorization.php" method="POST">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login"  required   >
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password"  required  >
    </div>
    <input type="submit" name="submit"  class="bi" value="Войти" /> &nbsp &nbsp &nbsp или &nbsp &nbsp&nbsp
<a href="#join_form" class="bip" id="join_pop">Зарегистрироваться</a>
    <a class="close" href="#close"></a>
</form>
</div>
<a href="#x" class="overlay" id="join_form"></a>
<div class="popup">
	<form action="Reg.php" method="POST">
    <p><b>Введите здесь детальную информацию о себе</b></p>
    <div>
        <label for="login">Логин </label>
        <input type="text" name="login" id="login" required/>
    </div>
     <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
    </div>
     <div>
        <label for="pass">Пароль</label>
        <input type="password" id="pass" name="password" required />
    </div>
    <div>
        <label for="firstname">Имя</label>
        <input type="text" id="firstname" name="firstname" required />
    </div>
    <div>
        <label for="lastname">Фамилия</label>
        <input type="text" id="lastname" name="lastname" required />
    </div>
    <input type="submit" name="submit" class="bi" value="Зарегистрироваться" />
    &nbsp &nbsp &nbsp или &nbsp &nbsp&nbsp
    <a href="#login_form" class="bip" id="login_pop">Войти</a>

    <a class="close" href="#close"></a>
    </form>
    </div>
    </div>
					<div class="header-social">
						<ul>
							<li><a href="https://www.facebook.com/itnovosti.org.ua/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/4c_news"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://news.google.com/topics/CAAqKAgKIiJDQkFTRXdvSkwyMHZNR1ptZHpWbUVnSnlkUm9DVWxVb0FBUAE?hl=ru&gl=RU&ceid=RU%3Aru"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.instagram.com/tprogerlive"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UC4VWJy0HOCOQedusLUDCQkA"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="./img/34.png" alt=""></a>
					</div>
					<div class="header-ads">
						<img class="center-block" src="./img/ad-2.jpg" alt=""> 
					</div>
				</div>
			</div>
			
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="index.php">ГЛАВНАЯ</a></li>
							<li><a href="#">НОВИНКИ</a></li>
							<li><a href="#">IT</a></li>
							<li><a href="#">СПОРТ</a></li>
							<li><a href="#">ПОПУЛЯРНОЕ</a></li>
							<li><a href="#">БИЗНЕС</a></li>
							
						</ul>
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Поиск">
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</header>
		
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/11.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">НОВИНКА</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="post1.php">Китай объявил о создании первого в мире эксафлопсного суперкомпьютера</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
						<li><i class="fa fa-comments"></i> 47</li>
					</ul>
				</div>
			</article>
			
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/23.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">НОВИНКА</a></li>
						<li class="article-type"><i class="fa fa-file-text"></i></li>
					</ul>
					<h2 class="article-title"><a href="ost1.php">Суперкомпьютер смоделировал работу всей сердечно-сосудистой системы человека</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
						<li><i class="fa fa-comments"></i> 45</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/31.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">НОВИНКА</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="ho1.php">Apple HomeKit - умный дом, управляемый SIRI</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			
		</div>
		
		<div class="section">
			
			<div class="container">
				
				<div class="row">
				
					<div class="col-md-12">
						
						<div class="section-title">
							<h2 class="title">ПОПУЛЯРНЫЕ ПОСТЫ</h2>
							
							<ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#tab1">ВСЁ</a></li>
								<li><a data-toggle="tab" href="#tab1">НОВИНКИ</a></li>
								<li><a data-toggle="tab" href="#tab1">IT</a></li>
								<li><a data-toggle="tab" href="#tab1">CПОРТ</a></li>
								<li><a data-toggle="tab" href="#tab1">БИЗНЕС</a></li>
								<li><a data-toggle="tab" href="#tab1">ПОПУЛЯРНОЕ</a></li>
							</ul>
							<!-- /tab nav -->
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/25.jpg" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Oculus Rift: 30 VR игр в которые уже можно поиграть</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 47</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
									
									<!-- Column 2 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/26.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">AMD Radeon Pro Duo - видеокарта с двумя GPU для виртуальной реальности</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 12</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 2 -->
									
									<!-- Column 3 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/27.jpg" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-file-text"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Гарнитура SONY PLAYSTATION VR</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i>Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 14</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 3 -->
									
									<!-- Column 4 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="./img/28.jpg" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-file-text"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">VR-шлем FEELREAL позволит ощущать запахи</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 54</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- Column 4 -->
								</div>
								<!-- /row -->
								
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/51.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Компьютеры Российского производства МЦСТ Эльбрус уже в продаже</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/52.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">LSST - Большой синоптический обзорный телескоп</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
									
									<!-- Column 2 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/53.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Рисующий робот mDrawBot 4-in-1 Arduino (Видео)</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/2.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Квантовый компьютер D-Wave 2000Q за 15 млн. долларов</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 2 -->
									
									<!-- /Column 3 -->
									<div class="col-md-4 hidden-sm">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/5.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Что нас ждет в будущем. Предсказания IBM о технологиях после 2022 г.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="./img/54.jpg" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">NOKIA SMART WATCH</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> Май 21, 2018</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 3 -->
								</div>
								<!-- /row -->
							</div>
							<!-- /tab1 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">НОВОСТИ</h2>
								</div>
								<!-- /section title -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/66.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Суперкомпьютер смоделировал работу всей сердечно-сосудистой системы человека</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Американские ученые из Университета Дьюка  в Дареме разработали суперкомпьютер, который позволяет &nbsp&nbsp создавать &nbspтрехмерную&nbsp&nbsp модель сосудистой системы человека, практически не отличающейся по&nbsp показателям&nbsp от&nbsp &nbspживого&nbsp человеческого организма.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/54.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">NOKIA SMART WATCH</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 28</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/53.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">РИСУЮЩИЙ РОБОТ MDRAWBOT 4-IN-1 ARDUINO (ВИДЕО)</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 45</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">НОВОСТИ</h2>
								</div>
								<!-- /section title -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/67.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Квантовый компьютер D-Wave 2000Q за 15 млн. долларов</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 19</li>
										</ul>
										<p>Канадская компания D-Wave считается одним из первопроходцев в области производства коммерчески доступных квантовых компьютеров. Выпуск первых моделей состоялся ещё в 2007 году.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/52.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">LSST - БОЛЬШОЙ СИНОПТИЧЕСКИЙ ОБЗОРНЫЙ ТЕЛЕСКОП</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 65</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/5.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">ЧТО НАС ЖДЕТ В БУДУЩЕМ. ПРЕДСКАЗАНИЯ IBM О ТЕХНОЛОГИЯХ ПОСЛЕ 2022 Г.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i>Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 56</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">НОВИНКИ</h2>
								</div>
							</div>
							<!-- /section title -->
							
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/71.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Япония начинает массовое производство экзоскелетов</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 38</li>
										</ul>
										<p>До конца года японская машиностроительная корпорация Panasonic пообещала начать массовое производство и продажи прикладных экзоскелетов.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/72.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">SAMSUNG продемонстрировал невероятно гибкий дисплей</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 32</li>
										</ul>
										<p>ПОДРОБНЕЕ... SAMSUNG продемонстрировал невероятно гибкий дисплей (Видео) Дата 15 Янв 2014 SAMSUNG На закрытой презентации уже после окончания выставки CES 2014 в Лас-Вегасе компания Samsung продемонстрировала VIP-партнерам свою новейшую разработку — гнущийся дисплей с диагональю 5,68 дюйма.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/66.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">СУПЕРКОМПЬЮТЕР СМОДЕЛИРОВАЛ РАБОТУ ВСЕЙ СЕРДЕЧНО-СОСУДИСТОЙ СИСТЕМЫ ЧЕЛОВЕКА</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/67.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">КВАНТОВЫЙ КОМПЬЮТЕР D-WAVE 2000Q ЗА 15 МЛН. ДОЛЛАРОВ</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 45</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
							
							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/73.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Windows 10 на флешке</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i>  Май 17, 2018</li>
											<li><i class="fa fa-comments"></i> 74</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="./img/ad-1.jpg" alt=""> 
						</div>
						<!-- /Ad widget -->
						
						<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title">ПОЗНАВАЙ НОВОЕ С НАМИ</h2>
							</div>
							<ul>
								<li><a href="https://www.facebook.com/itnovosti.org.ua/" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
								<li><a href="https://twitter.com/4c_news" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
								<li><a href="https://news.google.com/topics/CAAqKAgKIiJDQkFTRXdvSkwyMHZNR1ptZHpWbUVnSnlkUm9DVWxVb0FBUAE?hl=ru&gl=RU&ceid=RU%3Aru" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
								<li><a href="https://www.instagram.com/tprogerlive" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
								<li><a href="https://www.youtube.com/channel/UC4VWJy0HOCOQedusLUDCQkA" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
								<li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
							</ul>
						</div>
						<!-- /social widget -->
						
						<!-- subscribe widget -->
						<div class="widget subscribe-widget">
							<div class="widget-title">
								<h2 class="title">ПОДПИСАТЬСЯ НА КУСЬ.ру</h2>
							</div>
							<form>
								<input class="input" type="email" placeholder="Введите ваш Email">
								<button class="input-btn">ПОДПИСАТЬСЯ</button>
							</form>
						</div>
						<!-- /subscribe widget -->
						
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">САМЫЕ ЧИТАЕМЫЕ</h2>
							</div>
							
							<!-- owl carousel 3 -->
							<div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/27.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">ГАРНИТУРА SONY PLAYSTATION VR</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> МАЙ 21, 2018 </li>
											<li><i class="fa fa-comments"></i> 45</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/28.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">VR-ШЛЕМ FEELREAL ПОЗВОЛИТ ОЩУЩАТЬ ЗАПАХИ</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> МАЙ 21, 2018</li>
											<li><i class="fa fa-comments"></i> 66</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /owl carousel 3 -->
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="./img/13.jpg" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">OCULUS RIFT: 30 VR ИГР В КОТОРЫЕ УЖЕ МОЖНО ПОИГРАТЬ</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="./img/12.jpg" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">AMD RADEON PRO DUO - ВИДЕОКАРТА С ДВУМЯ GPU ДЛЯ ВИРТУАЛЬНОЙ РЕАЛЬНОСТИ</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 31</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="./img/5.jpg" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">ЧТО НАС ЖДЕТ В БУДУЩЕМ. ПРЕДСКАЗАНИЯ IBM О ТЕХНОЛОГИЯХ ПОСЛЕ 2022 Г.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 67</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /article widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="./img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">ПОПУЛЯРЫНЕ ВИДЕО</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="./img/18.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">НОВИНКА</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Роскошный и мощный Vertu Constellation 2017</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="./img/19.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">НОВИНКА</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Samsung и Yamaha разработали концепт умного ветрового стекла</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="./img/22.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">НОВИНКА</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Роскомнадзор не будет блокировать анонимайзеры</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 65</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="./img/21.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">НОВИНКА</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Гарнитура SONY PLAYSTATION VR</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
										<li><i class="fa fa-comments"></i> 121</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">ПОПУЛЯРНЫЕ ПОСТЫ</h2>
						</div>
						<!-- /section title -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/15.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">НОВИНКА</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Китай объявил о создании первого в мире эксафлопсного суперкомпьютера</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
									<li><i class="fa fa-comments"></i> 43</li>
								</ul>
								<p>Если вы никогда не слышали об эксафлопсных компьютерах, неофициально называемых «сверхсуперкомпьютерами», то ничего удивительного, потому что они пока еще не существуют. Однако уже в этом году все может измениться.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/16.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">НОВИНКА</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">SPUD - складной 24-дюймовый монитор, умещающийся в заднем кармане</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
									<li><i class="fa fa-comments"></i> 21</li>
								</ul>
								<p>На выставке SXSW (South By Southwest Festival) компания Arovia представила необычную новинку - складной монитор размером 24 дюйма, который в сложенном состоянии легко поместится в задний карман Ваших брюк.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/17.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">НОВИНКА</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Ударостойкие и умные часы Casio WSD-F10</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
									<li><i class="fa fa-comments"></i> 65</li>
								</ul>
								<p>После представления в январе ударостойких Casio WSD-F10 Android Wear SmartWatch, умные часы, наконец поступили в продажу.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/71.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">НОВИНКА</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">ПОДРОБНЕЕ... Япония начинает массовое производство экзоскелетов</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>До конца года японская машиностроительная корпорация Panasonic пообещала начать массовое производство и продажи прикладных экзоскелетов.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- pagination -->
						<div class="article-pagination">
							<ul> 
								<li class="active"><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">ПОПУЛЯРНЫЕ ПОСТЫ</h2>
							</div>
							
							<!-- owl carousel 4 -->
							<div id="owl-carousel-4" class="owl-carousel owl-theme">
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="./img/18.jpg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">НОВИНКА</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Роскошный и мощный Vertu Constellation 2017</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
											<li><i class="fa fa-comments"></i> 45</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="./img/19.jpg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">НОВИНКА</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Samsung и Yamaha разработали концепт умного ветрового стекла</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> МАЙ 24, 2018</li>
											<li><i class="fa fa-comments"></i> 54</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /owl carousel 4 -->
						</div>
						<!-- /article widget -->
						
						<!-- galery widget -->
						<div class="widget galery-widget">
							<div class="widget-title">
								<h2 class="title">ПОПУЛЯРНЫЕ ФОТО</h2>
							</div>
							<ul>
								<li><a href="#"><img src="./img/1.jpeg" alt=""></a></li>
									<li><a href="#"><img src="./img/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/8.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/7.jpg" alt=""></a></li>
							</ul>
						</div>
						<!-- /galery widget -->
						
						<!-- tweets widget -->
						<div class="widget tweets-widget">
							<div class="widget-title">
								<h2 class="title">ПОПУЛЯРНЫЕ ТВИТЫ</h2>
							</div>
							<ul>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@4C_NEWS</a> Nestle заплатит Starbucks $7,15 млрд за право продавать кофе компании по всему миру <a href="#">https://twitter.com/4c_news</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@4C_NEWS</a> Instagram добавил функцию встроенных платежей в свое приложение. Пока она доступна лишь части пользователей в США. <a href="#">https://twitter.com/4c_news</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@4C_NEWS</a> Передовые IT-компани США и Китая стали выплачивать сотрудникам  премии, которые необходимо потратить на впечатления <a href="#">https://twitter.com/4c_news</a></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tweets widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="#" class="logo"><img src="./img/34.png" alt=""></a>
									<p>Анонсы &nbsp и &nbsp обзоры &nbsp мобильных  &nbspустройств, актуальные новости компьютерных технологий, поисковых гигантов, социальных сетей, новинки компьютерных игр и мобильного мира только на техноблоге IT Новости.</p>
								</div>
							</div>
							
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">БУДЬ В КУРСЕ С НАМИ</h3>
								</div>
								<ul>
									<li><a href="https://www.facebook.com/itnovosti.org.ua/" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/4c_news" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://news.google.com/topics/CAAqKAgKIiJDQkFTRXdvSkwyMHZNR1ptZHpWbUVnSnlkUm9DVWxVb0FBUAE?hl=ru&gl=RU&ceid=RU%3Aru" class="google"><i class="fa fa-google"></i></a></li>
									<li><a href="https://www.instagram.com/tprogerlive" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UC4VWJy0HOCOQedusLUDCQkA" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							
							<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">ПОДПИСАТЬСЯ НА КУСЬ.ру</h2>
								</div>
								<form>
									<input class="input" type="email" placeholder="Введите ваш Email">
									<button class="input-btn">ПОДПИСАТЬСЯ</button>
								</form>
							</div>
						
						</div>
						
						<div class="col-md-4">
							
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">ПОПУЛЯРНЫЕ ПОСТЫ</h2>
								</div>

								
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/2.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Квантовый компьютер D-Wave 2000Q за 15 млн. долларов</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 5, 2018</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/8.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">SPUD - складной 24-дюймовый монитор, умещающийся в заднем кармане</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 5, 2018</li>
											<li><i class="fa fa-comments"></i> 7</li>
										</ul>
									</div>
								</article>
								
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/5.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Предсказания IBM о технологиях после 2022 г.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> Май 5, 2018</li>
											<li><i class="fa fa-comments"></i> 9</li>
										</ul>
									</div>
								</article>
								
							</div>
							
						</div>
						
						<div class="col-md-4">
							
							<div class="footer-widget galery-widget">
								<div class="widget-title">
									<h2 class="title">ПОПУЛЯРНЫЕ ФОТО</h2>
								</div>
								<ul>
									<li><a href="#"><img src="./img/1.jpeg" alt=""></a></li>
									<li><a href="#"><img src="./img/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/8.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="./img/7.jpg" alt=""></a></li>
								</ul>
							</div>
							
							<div class="footer-widget tweets-widget">
								<div class="widget-title">
									<h2 class="title">ПОСЛЕДНИЕ ТВИТЫ</h2>
								</div>
								<ul>
									<li class="tweet">
										<i class="fa fa-twitter"></i>
										<div class="tweet-body">
											<p><a href="#">@4C_NEWS</a> Школьники из Киева запустили стартап Nuka. На форуме iForum они представили «вечные» блокнот и карандаш <a href="#">https://twitter.com/4c_news</a></p>
										</div>
									</li>
								</ul>
							</div>
							
						</div>
						
					</div>
				
				</div>
				
			</div>
			
			<div id="bottom-footer" class="section">
				
				<div class="container">
				
					<div class="row">
						
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="#">О НАС</a></li>
								<li><a href="#">КОНТАКТЫ</a></li>
								
							</ul>
						</div>
						
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> 
</span>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</footer>
		
		<div id="back-to-top"></div>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
