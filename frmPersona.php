<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
include_once('clsPersona.php');
?>

<b> REGISTRO DE PERSONAS  </b>
<form id="form1" name="form1" method="post" action="frmPersona.php">
  <table width="400" border="0">
    <tr> <td> </td>
     <td>
     <input name="txtIdPersona" type="hidden" value="" id="txtIdPersona" />
     </td>
    </tr>

    <tr>
      <td width="80">Nombre</td>
      <td width="225">	 	  
        <input name="txtNombre" type="text"  value="" id="txtNombre" />
      </td>
    </tr>

    <tr>
      <td width="80">Paterno</td>
      <td width="225">	 	  
        <input name="txtPaterno" type="text"  value="" id="txtPaterno" />
      </td>
    </tr>

    <tr>
      <td width="80">materno</td>
      <td width="225">	 	  
        <input name="txtMaterno" type="text"  value="" id="txtMaterno" />
      </td>
    </tr>

    <tr>
      <td width="80">Edad</td>
      <td width="225">	  	  
        <input name="txtEdad" type="text" value="" id="txtEdad" />
      </td>
    </tr>
    
    <tr>
      <td colspan="2">
      <input type="submit" name="botones"  value="Nuevo" />
      <input type="submit" name="botones"  value="Guardar" />
      <input type="submit" name="botones"  value="Modificar" />
      <input type="submit" name="botones"  value="Eliminar" />
     </td>
    </tr>
  </table>
</form>


<?php

function guardar()
{
	if($_POST['txtNombre'] )
	{
		$obj= new Persona();
		$obj->setNombre($_POST['txtNombre']);
		$obj->setPaterno($_POST['txtPaterno']);
		$obj->setMaterno($_POST['txtMaterno']);
		$obj->setEdad($_POST['txtEdad']);
		if ($obj->guardar())
			echo "Persona Guardada..!!!";
		else
			echo"Error al guardar la Persona";
	}
	else
		echo"El nombre es obligatorio..!!!";
}	

function modificar()
{
	if($_POST['txtNombre'])
	{
		$obj= new Persona();
		$obj->setIdPersona($_POST['txtIdPersona']);
		$obj->setNombre($_POST['txtNombre']);
		$obj->setPaterno($_POST['txtPaterno']);
		$obj->setMaterno($_POST['txtMaterno']);
		$obj->setEdad($_POST['txtEdad']);
		if ($obj->modificar())
			echo "Persona modificada..!!!";
		else
			echo "Error al modificar la persona..!!!";		
	}
	else
		echo "El nombre es obligatorio...!!!";
}

function eliminar()
{
	if($_POST['txtIdPersona'])
	{
		$obj= new Persona();
		$obj->setIdPersona($_POST['txtIdPersona']);		
		if ($obj->eliminar())
			echo "Persona eliminada";
		else
			echo "Error al eliminar la persona";		
	}
	else	
		echo "para eliminar la persona, debe tener el codigo de la persona..!!!";	
}



//programa principal
  switch($_POST['botones'])
  {
	case "Nuevo":{
	}break;

	case "Guardar":{
    guardar();
	}break;

	case "Modificar":{
    modificar();
	}break;

	case "Eliminar":{
     eliminar();
	}break;

  }
?>  

</body>
</html>
