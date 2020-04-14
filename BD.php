<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templte file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BD
 *
 * @author manuel
 * */
class BD
{

    /**
     * @var mysqli $con conexión a la base de datos
     */
    public $con;

    /**
     * @var string nombre de la base de datos conectada
     */
    private $database;
    /**
     * @var string usuario de la base de datos
     */
    private $user;
    /**
     * @var string password de la base de datos
     */
    private $pass;
    /**
     * @var host donde está el servidor de la base de datos
     */
    private $host;
    /**
     * @var string|null msj con información de error de la conexión, si null=>
     */
    private $error=NULL;

    /**
     * BD constructor.
     * @param null $datosConexion array con datos de conexión
     * Al instanciar el objeto el atributo $con (mysqli) contendrá la conexión
     */
    public function __construct($datosConexion=null)
    {

    }

    /**
     * return mensaje de error actual (o nul
     */
    public function getError()
    {

    }

    function getCon()
    {
        return $this->con;
    }


    public function insertar($sentencia, $valores=null)
    {
    }

    public function borrar($sentencia, $valores=null)
    {

    }

    public function actualizar($sentencia, $valores=null)
    {

    }

    /**
     *
     * @param type $sentencia
     * @param type $valores
     * @return array con las filas de la consulta
     */
    public function seleccionar($sentencia, $valores=null)
    {
    }

    function get_database()
    {
        return $this->database;
    }

    function getUser()
    {
        return $this->user;
    }

    function getPass()
    {
        return $this->pass;
    }

    function getHost()
    {
        return $this->host;
    }

    public function usar_BD($param=null, $conexion=null)
    {
    }

    /**
     * Retorna un array indexado con los nombres de las bases de datos
     */
    public function selecionar_bases_datos()
    {
    }

    /**
     * Retorna un array con los campos de una tabla
     */
    public function get_campos($tabla)
    {

    }

    public function __toString()
    {
        $msj="<h3>Visualizando la conexión a la BD</h3>";
        $msj.="<h4>host: $this->host user : $this->user pass: $this->pass</h4> ";
        $msj.="<hr/>";
        return $msj;
    }

    /**
     * En PDO
     */
    public function cerrarDB()
    {
        $this->con=null;
    }

    private function ejecutarConsulta($sentencia, $valores=null, $conexion=null)
    {

    }

}
