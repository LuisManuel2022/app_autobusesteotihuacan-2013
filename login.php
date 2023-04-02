<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="login_procesador.php">
  <table width="276" border="0">
    <tr>
      <td width="12">&nbsp;</td>
      <td width="114"><div align="center"><strong>Inicio de Sesión</strong></div></td>
      <td width="128">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Usuario:</td>
      <td><label for="Usuario"></label>
      <input type="text" name="Usuario" id="Usuario" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Password:</td>
      <td><label for="Password"></label>
      <input type="password" name="Password" id="Password" /></td>
    </tr>
  </table>
  <input type="submit" name="Iniciar" id="Iniciar" value="Iniciar Sesión" />
</form>
</body>
</html>