<html>
<head>
	<title>IDENTIFIQUE SI PUEDE CIRCULAR</title>
</head>
<body>
<h1 align="center">IDENTIFIQUE SI PUEDE CIRCULAR</h1>

<form action="/recover" method="post">
	@csrf
	<label for="Name" ><font face="Arial" size="5px">Inserte placa de manera=></font> <font color="blue" size="5px">pww0594</font></label>
	<input type="text" name="placa"  id="placa" placeholder="Ej:pww0594" ><br> 
	<label for="Name"><font face="Arial" size="5px">Inserte dia de manera=></font> <font color="blue" size="5px">lunes </font></label>
	<input type="text" name="fecha"  id="fecha" placeholder="Ej:lunes"><br> 
	<label for="Name"><font face="Arial" size="5px">Inserte hora de manera=></font> <font color="blue" size="5px">16.00</font> </label>
	<input type="text" name="hora"  id="hora" placeholder="Ej:16.00"><br>
    <button type="submit">ENVIAR DATOS</button><br>

</form>
</body>
</html>