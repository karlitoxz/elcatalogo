<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ElCatalogo</title>
	<link rel="stylesheet" href="style/normalize.css">
	<link rel="stylesheet" href="style/style.css">
</head>
<body>

	<header>
		<div class="logo"><img src="img/elcatalogo_logo.png" alt="El_Catalogo_logo"></div>
		<div class="catalogo"><h1>ELC&Aacute;TALOGO.COM.CO</h1></div>
		<div class="buscador"><input type="text" class="textbox" size="30" placeholder="Buscar"></div>		
		<div class="subir"><img src="img/BtnSubir.png" alt=""></div>
		<div class="social">
			<img src="img/facebook.png" alt="" width="30px" height="30px">
			<img src="img/twitter.png" alt="" width="30px" height="30px">
			<img src="img/youtube.png" alt="" width="30px" height="30px">
		</div>
	</header>

<div class="separcion"></div>

<nav>

	<ul class="menu">
		<li><a href="compania.php">Compa&ntilde;&iacute;a</a></li>
		<li><a href="categorias.php">Categor&iacute;as</a></li>
		<li><a href="disena.php">Dise&ntilde;a</a></li>
		<li><a href="ubica.php">Ubica</a></li>
		<li><a href="protege.php">Protege</a></li>
		<li><a href=""  class="active">Cont&aacute;ctenos</a></li>
	</ul>

</nav>

<section>
		<article class="concon">
			<div class="logocon">
				<img src="img/contactenos/logo_horizontal.png" alt="" width="100%"/>
			</div>
		</article>
		
		<article class="con02">
				<h1>Contáctenos</h1>
			<div class="logoho">
				<h2>Envíanos  un correo,<br/>
				lo atenderemos en el menor tiempo posible</h2>
			</div>
		</article>

		<article class="con03">
			<form action="">
			
			  <table width="80%" border="">
			    <tr>
			      <td width="50%">Nombre</td>
			      <td width="50%"><label for="nombre"></label>
		          <input name="nombre" type="text" id="nombre" size="80%"></td>
		        </tr>
			    <tr>
			      <td>Correo</td>
			      <td><label for="email"></label>
		          <input name="email" type="text" id="email" size="80%"></td>
		        </tr>
			    <tr>
			      <td>Mensaje:</td>
			      <td><textarea name="mensaje" cols="79%" id="mensaje"></textarea></td>
		        </tr>
		      </table>
			  <p>
			    <input type="submit" name="enviar" id="enviar" value="Enviar">
			  </p>
            </form>
		
		</article>
	
</section>
	

<footer>
	Términos y condiciones <span> | </span>Pol&iacute;tica de Privacidad<span> | </span>Ayuda <br/>
	Copyright © 2014 - 2015 - elcatalogo S.A.S.   Portal de Cat&aacute;logos en internet 
</footer>

</body>
</html>