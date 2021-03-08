<html>
<head>
<title>Kalkulator Ku</title>
</head>

<body>
<form name="form1" method="post" action="opartimatika.php">
	<h2>Kalkulator Ku</h2>
	<link rel="stylesheet" type="text/css" href="style.css">
	<table width="50%" border="3">
		<tr>
			<td width="40%">
			<div align="center">masukan angka</div>
		</td>
		<td width="20%">
			<div align="center">Operator</div>
		</td>
		<td width="40%">
			<div align="center">masukan angka</div>
		</td>
		<td>
			<div align="center">&nbsp;</div>
		</td>
	</tr>
	<td>
		<div align="center">
			<input type="text" name="operand1" size="10">
		</div>
	</td>
<td>
	<div align="center">
		<select name="operator">
			<option>+</option>
			<option>-</option>
			<option>%</option>
			<option>*</option>
			<option>/</option>
		</select>
	</div>
</td>
<td>
		<div align="center">
			<input type="text" name="operand2" size="10">
		</div>
	</td>
	<td>
		<div align="center">
			<input type="submit" name="submit" value="submit">
		</div>
	</td>
</table>
</form>
</body>
</html>