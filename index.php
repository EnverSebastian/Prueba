<?php session_start();
include ("_files/_cnx/_cnx.php");
include ("_files/_funciones/_general.php");

$Pagina1 = isset($_GET['v1']) ? $_GET['v1'] : '';
$Pagina2 = isset($_GET['v2']) ? $_GET['v2'] : '';
$Pagina3 = isset($_GET['v3']) ? $_GET['v3'] : '';
//$Pagina4 = isset($_GET['v4']) ? $_GET['v4'] : '';



switch($Pagina1)
{
	case "":
		include ("_files/_secciones/_home/_home.php");
	break;
	case "carrito":
		include ("_files/_secciones/_carrito/_index.php");
	break;
	default:
		/*Verifica si la Variable Pagina1 Corresponde a una Sublinea Existente*/
		if(V_LineaSublinea($Pagina1, false)==true) {
			switch($Pagina2) //Este Verifica si existe variable pagina 2
			{
				case "": //En caso de que el 
					include ("_files/_secciones/_productos/_index.php");
				break;
				default:
					include ("_files/_secciones/_productos/_index.php");
				break;
				
			}
		}
		elseif (V_LineaSublinea($Pagina1, true))
		{
			echo "Linea y Sublinea";
		}
		else
		{
			/*Error 404*/
			include ("_files/_secciones/_error404/_404.php");
		}
	break;
}

?>