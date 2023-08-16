<!doctype html>
<html>
	<head>
		<title>Servo 5</title>
	</head>
	<body>
        <CENTER><H1>Formato de usuarios</H1>
	
        <a href="index.php">MENU</a><br><br>

        </CENTER>
        <br>
<form action="" method="post">
            <label for="">APELLIDO PATERNO: </label>
            <input type="text" class="form-control"name="APELLIDOPAT"value="" placeholder="Apellido Paterno">

            <label for="">APELLIDO MATERNO: </label>
            <input type="text" class="form-control"name="APELLIDOMAT"value="" placeholder="Apellido Materno">

            <label for="">NOMBRE (S): </label>
            <input type="text" class="form-control"name="NOMBRE"value="" size="30" placeholder="Nombre">
            <br><br>

            <label for="">CORREO ELECTRONICO: </label>
            <input type="text" class="form-control"name="EMAIL"value="" size="40" placeholder="Email">
            
            <label for="">CAJA: </label>
            <input type="text" class="form-control"name="CAJA"value="" size="5" placeholder="CAJA">
            <label for="">PASSWORD CAJA: </label>
            <input type="text" class="form-control"name="PASSWORD_CAJA"value="" size="20" placeholder="PASSWORD">
</form>
    
    <H3>PERFILES</H3>
    
    <label for="PERFILES">Elegir perfil de usuario : </label>
        <select name="PERFILES" id="ID_PERFILES" ></select>

    <br><br>

    <H3>SERVIDOR</H3>
    <label for="SERVIDOR">Elegir el Servidor :</label>
        <select name="SERVIDOR" id="ID_SERVIDOR"></select>

    <br><br>

    <H3>CAMPUS</H3>
    <label for="CAMPUS">Elegir el Campus del usuario: </label>
        <select name="CAMPUS" id="ID_CAMPUS"></select>

    <br><br>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<BR><BR>
USUARIO ESCRITORIO REMOTO <input type="text" size="20" name="USUARIO_EREMOTO"> 
PASSWORD ESCRITORIO REMOTO <input type="text" size="20" name="PASSWORD_EREMOTO"> <br><br>

USUARIO SERVO <input type="text" size="20" name="USUARIO_SERVO"> 
PASSWORD SERVO <input type="text" size="20" name="PASSWORD_SERVO"> <br><br>

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<BR><BR>

    FECHA DE ALTA 
    <label for="start">FECHA:</label>

<input type="date" id="start" name="FECHA_INICIO" value="2023-08-16" min="2023-08-16" max="2030-12-31" />
    
    
    / FECHA DE BAJA 
        <input type="date" id="start" name="FECHA_FIN" value="2023-08-16" min="2023-08-16" max="2030-12-31" />

        <BR><BR>
    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<BR><BR>
  NUEVO / MODIFICAR / ELIMINAR / CANCELAR / GUARDAR / BUSCAR /   <br><br>

  REPORTE DE USUARIOS / GENERAR CREDENCIALES

	</body>
</html>
