<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELOJ MUNDIAL</title>
</head>

<body style="background: linear-gradient(#d3e4f4,#7db0df) fixed;">
	<h2 style="text-align: center; color: blue;">Paises del Mundo</h2>
	<div style="text-align: center;">
		<form action="horaMundial.php" method="POST">
			<label>Pais:</label>
			<select name="cbopais">
				<option value="0">- Seleccione -</option>
				<option value="PE">Perú</option>
				<option value="AR">Argentina</option>
				<option value="CO">Colombia</option>
				<option value="ES">España</option>
			</select>
			<br><br>
			<button type="submit" style="background-color: blue; color: white; padding: 10px; border: blue; cursor: pointer;">Ver Hora</button>
		</form>
	</div>
</body>
</html>