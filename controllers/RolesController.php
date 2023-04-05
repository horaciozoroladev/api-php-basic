<?php
// include("../db/DBConnection.php");
include("../models/RolesModel.php");
$roles = new RolesModel();
$respuesta = null;	
switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':
			if(!empty($_GET["id"])) {
				$id=intval($_GET["id"]);
				$roles->get_roles_by_id($id);
			}
			else {
				$roles->get_roles();
			}
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
?>