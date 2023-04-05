<?php
require_once "../db/DBConnection.php";
class RolesModel
{
    private $respuesta = null;
    private $conn = null;

    function __construct()
    {
        $this->conn = new DBConnection();

        $this->respuesta = array();
    }

    function get_roles()
    {
        $this->conn = new DBConnection();
        $this->respuesta = null;
        $query = "SELECT * FROM roles;";
        $resultado = mysqli_query($this->conn->connect_db(), $query);

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $this->respuesta[] = $fila;
        }
        if (!empty($this->respuesta)) {
            header('Content-Type: application/json');
            echo json_encode($this->respuesta);
        }
    }

    function get_roles_by_id($id)
    {
        $this->conn = new DBConnection();
        $this->respuesta = null;
        $query = "SELECT * FROM roles WHERE id=$id";
        $resultado = mysqli_query($this->conn->connect_db(), $query);

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $this->respuesta[] = $fila;
        }
        if (!empty($this->respuesta)) {
            header('Content-Type: application/json');
            echo json_encode($this->respuesta);
        }
    }
}
?>