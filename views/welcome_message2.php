<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Medellín ilustrada</title>
<link href="http://localhost/ci/css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
</style></head>
<body>
hola
<?=form_open('welcome/insert_mail'); ?>
    <p>Nombre <input type="text" name="nombre"  value=""  /> </p>
    <p>Email <input type="text" name="email"  value=""  /> </p>
    <p><input type="submit" value="enviar" /></p>
  </form>

</body>
</html>