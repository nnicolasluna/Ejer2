<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
</head>
 
<body>
	<form method="post" action="<?= base_url() ?>Crud/savedata">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">ci</td>
    <td width="329"><input type="number" name="first_name"/></td>
  </tr>
  <tr>
    <td>Nombrecompleto</td>
    <td><input type="text" name="last_name"/></td>
  </tr>
  <tr>
    <td>fechanacimiento</td>
    <td><input type="text" name="email"/></td>
  </tr>
  <tr>
  <tr>
    <td>departamento</td>
    <td><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="insertar"/></td>
  </tr>
</table>
 
	</form>
</body>
</html>