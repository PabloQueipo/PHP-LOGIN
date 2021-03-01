<?php
	$numero1 = isset($_GET['numero1'])?$_GET['numero1']:1;
	$numero2 = isset($_GET['numero2'])?$_GET['numero2']:1;
	$operar = isset($_GET['operar'])?$_GET['operar']:"";
	$resultado = isset($_GET['resultado'])?$_GET['resultado']:"0";
	$operacion = isset($_GET['operacion'])?$_GET['operacion']:"Sumar";
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>P029</title>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/default.js"></script>
</head>

<body>
	<div id="pagina">
		<?php
			$numero1 = (int) $numero1;
			$numero2 = (int) $numero2;
			$activarSumar = "";
			$activarRestar = "";
			$activarMultiplicar = "";

			
			if($operacion=="Sumar")
			{
				$resultado = $numero1 + $numero2;
				$activarSumar = "checked='checked'";
			}
			if($operacion=="Restar")
			{
				$resultado = $numero1 - $numero2;
				$activarRestar = "checked='checked'";
			}
			if($operacion=="Multiplicar")
			{
				$resultado = $numero1 * $numero2;
				$activarMultiplicar = "checked='checked'";
			}
		?>
		<?php
			$num1 = $numero1;
			$num2 = $numero2;
			$sol = $resultado;
			$sum = $activarSumar;
			$res = $activarRestar;
			$pro = $activarMultiplicar;			
		?>	
		<form action="#" method="get">
			<p>
				<label>Numero</label>
				<input name="numero1" type="number" max="100" min="1" value="<?php echo "$num1"; ?>" maxlength="3" size="3">
			</p>
			<p>
				<label>Numero</label>
				<input name="numero2" type="number" max="100" min="1" value="<?php echo "$num2"; ?>" maxlength="3" size="3">
			</p>
			<p>
				<input type="submit" name="operar" value="Operar">
			</p>
			<p>
				<input name="resultado" type="text" readonly="readonly" value="<?php echo "$sol"; ?>" size="15">
			</p>
			<p>
				<input name="operacion" type="radio" <?php echo "$sum"; ?> value="Sumar"><span>Sumar</span>
				<input name="operacion" type="radio" <?php echo "$res"; ?> value="Restar"><span>Restar</span>
				<input name="operacion" type="radio" <?php echo "$pro"; ?> value="Multiplicar"><span>Multiplicar</span>
			</p>
			
		</form>
	</div>
</body>

</html>
