<?php 
include_once '../login/check.php';
if (!empty($_POST)) {
	$folder="../";
	$narchivo="usuarios";
	include_once("../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$nivel=$nivel?" nivel='$nivel' ":" nivel LIKE '%' ";
	$datos=${$narchivo}->mostrarTodo("nombre LIKE '%$nombre%' and paterno LIKE '%$paterno%' and materno LIKE '%$materno%' and nivel!=1 and $nivel");
	$titulo=array("usuario"=>"Usuario","nombre"=>"Nombre","paterno"=>"Paterno","materno"=>"Materno");
	listadoTabla($titulo,$datos,1,"modificar.php","eliminar.php","ver.php");
}
?>