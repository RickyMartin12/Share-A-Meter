<html>
<head>
<title>Introdu��o do SharedPercurUsers</title>
<link type="text/css" href="css\options_comen.css" rel="stylesheet" />
<link rel='stylesheet' type='text/css' href='css\styles.css' />
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script src="js\maps.js" type="text/javascript">
</script>

</head>
<body background="image/black.jpg">
<h1>Document Shared</h1>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.html'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Utilizador</span></a>
      <ul>
         <li class='active'><a href='sub_com.html'><span>Submeter Coment�rios</span></a></li>
         <li class='active'><a href='sub_per.html'><span>Submeter Percursos</span></a></li>
         <li class='has-sub'><a href='#'><span>Votos</span></a>
            <ul>
               <li><a href='vot_pos.html'>Positivos</span></a></li>
               <li class='last'><a href='vot_pos.html'><span>Negativos</span></a></li>
            </ul>
         </li>
         <li class='active'><a href='perfil.html'><span>Perfil</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Percursos</span></a>
      <ul>
               <li><a href='mais_pop.html'>Mais Populares</span></a></li>
               <li class='last'><a href='mais_recen.html'><span>Mais Recentes</span></a></li>
      </ul>
    </li>
   <li class='has-sub'><a href='#'><span>Ajuda</span></a>
      <ul>
               <li><a href='email.html'>Email</span></a></li>
               <li class='last'><a href='quem.html'><span>Quem Somos</span></a></li>
      </ul>
    </li>  
   <li class='last'><a href='#'><span>Coment�rios</span></a>
      <ul>
               <li><a href='alt_com.html'>Alterar</span></a></li>
      </ul>
   </li> 
</ul>
<div2>
<!-- Formata��o em PHP da inicializa��o da sess�o-->
<span class="align_text">  Bem vindo, Utilizador</span>
<!-- imagem do facebook -->

<a href="http://www.facebook.com">
<button type="button" class="facebook">
<img src="image/buttons/facebook-por.jpg" alt="Save icon" class="facebook2"/>
<br>


</button>
<p class="letra">
<a href="iniciar.php" class="yellow">Iniciar sess�o</a> | <a href="registar.php" class="yellow">Registar</a> | <a href="terminar.php" class="yellow">Terminar Sess�o</a>
</a>
</p>

</div2>

<!-- Insserir um coment�rio -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$coment=$_POST["coment"];
?>
<img src="C:\Documents and Settings\Ricardo\Ambiente de trabalho\My Shared Folder\1.jpg">
<center>
<?php
echo"<b>Coment�rio:</b> <p>$coment";
?>
</center>

<!-- Tag -->

<span class="cor">
Tag
</span>


<!-- Votos -->

<span class="votos">
Votos
</span>


<center>
<input type="submit" value="Submeter Coment�rio">
<input type="reset" value="Apagar">
</center>
</form>

<!-- Tag -->

<a href="Tag_per.html">
<button type="button" class="cor">
Tag
</button>
</a>

<!-- Votos -->

<a href="Votos_per.html">
<button type="button" class="votos">
Votos
</button>
</a>

<!-- Direitos de Autor -->


<span class="nomes">
<marquee>
<b>Autores deste Projecto:</b> 
<br>
<p>Ricardo Peleira, a44377</p>
<p>Andr� Oliveira, a41879</p>
<p>Al�xio Rodrigues, a35330</p>
</marquee>
</span>



</body>
</html>