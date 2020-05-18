
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="cotn_principal">
	<div class="cont_centrar">

	  <div class="cont_login">
	<div class="cont_info_log_sign_up">
	      <div class="col_md_login">
	<div class="cont_ba_opcitiy">
	        
	        <h2>Login</h2>  
	  <p>Ingresa tus datos Usuario y Contraseña no tienes contraseña registrate.</p> 
	  <button class="btn_login" onclick="cambiar_login()">Ingresar</button>
	  </div>
	  </div>
	<div class="col_md_sign_up">
	<div class="cont_ba_opcitiy">
	  <h2>Registrate</h2>

	  
	  <p>crea tu cuenta es gratis.       </p>

	  <button class="btn_sign_up" onclick="cambiar_sign_up()">Registrar</button>
	</div>
	  </div>
	       </div>

	    
	    <div class="cont_back_info">
	       <div class="cont_img_back_grey">
	       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
	       </div>
	       
	    </div>
	<div class="cont_forms" >
	    <div class="cont_img_back_">
	       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
	       </div>
	 <div class="cont_form_login">
	<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
	   <h2>LOGIN</h2>
	   <form action="login.php" method="post">
	   	<input type="text" name="usario" placeholder="Usuario " />
	   	<input type="password"name="clave" placeholder="Contraseña" />
	   	<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
	   </form>
	  </div>
	  
	   <div class="cont_form_sign_up">
	<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
	     <h2>Registrar</h2>
	     <form action="login.php" method="post">
	     	<input type="text" placeholder="Usuario" />
	     	<input type="password" placeholder="Contraseña" />
	     	<input type="submit" name="" class="btn_sign_up" nclick="cambiar_sign_up()"> 

	     	
	     </form>

	  </div>

	    </div>
	    
	  </div>
	 </div>
	</div>
	<script src="js/main.js"></script>
</body>
</html>