<!DOCTYPE html>
<html lang="ru">

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,  initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="/lab5/css/main.css" rel="stylesheet" type="text/css">
		<title>Bootstrap ЖД билеты</title>
	</head>
	<body>
		<div id="All" class="container">
			<div id="Header" class="container-fluid">
				<div class="container-fluid">
					<div class="row">
						<div class="col-7"></div>
						<div class="col-4">
							<nav class="navbar navbar-expand-lg navbar-dark bg-primary " >
								<div class="collapse navbar-collapse" >
									<ul class="navbar-nav mr-auto">
								      	<li class="nav-item active">
											<a class="nav-link" href='/lab5/index.php?id=fff'>Главная</a>
								      	</li>					      
								      	<li class="nav-item active">
								        	<a class="nav-link" href='/lab5/index.php?id=about'>Отзывы</a>
								      	</li>
								      	<li class="nav-item active">
								        	<a class="nav-link" href='/lab5/index.php?id=contact'>Контакты</a>
								      	</li>
								    </ul>
								</div>
							</nav>
						</div>
					</div>
					<div id="Header2" class="container-fluid" >
						<form>
							<div id="Header2Form" class="row" >
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Куда" >
									<input type="text" class="form-control" placeholder="Откуда" >
									<input type="text" class="form-control" placeholder="Когда" >
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" id="button-addon2">Купить</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
<?php
	$id='fff';
	if(count($_GET)>0)
	{
		include 'C:/xampp/htdocs/lab5/routing.php'; 
	}
	else
	{
		echo("<br>Нет id 404<br>");
	}
?>
<!--Подвал-->
			<div class="container" id="Footer">
			
				
				
				<div id="Footer2">
				<div class="row">
					<div class="col-3" align="center">
						<h6>Техническа подержка</h6>
								<div class="row">
									<div class="col">1</div></div>
								<div class="row">
									<div class="col">2</div></div>
								<div class="row">
									<div class="col">3</div></div>
								<div class="row">
									<div class="col">4</div></div> 
					</div>
					<div class="col-3" class="Text">
						<h6>Наши соц сети</h6>
								<div class="row">
									<div class="col">1</div></div>
								<div class="row">
									<div class="col">2</div></div>
								<div class="row">
									<div class="col">3</div></div>
								<div class="row">
									<div class="col">4</div></div> 
					</div>
					<div class="col-3" align="center">
							<h6>Сотрудничество</h6>
								<div class="row">
									<div class="col">1</div></div>
								<div class="row">
									<div class="col">2</div></div>
								<div class="row">
									<div class="col">3</div></div>
								<div class="row">
									<div class="col">4</div></div> 
					</div>
					<div class="col-3" align="center">
							<h6>О компании</h6>
								<div class="row">
									<div class="col">1</div></div>
								<div class="row">
									<div class="col">2</div></div>
								<div class="row">
									<div class="col">3</div></div>
								<div class="row">
									<div class="col">4</div></div> 
					</div>
				</div>
				</div>
			</div>
			
		</div>
	</body>
</html>

