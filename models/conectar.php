<?php
require_once __DIR__ . '/vendor/autoload.php';
$opciones = array(
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_EMULATE_PREPARES => true
);
try {
    $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.":dbname=".DB_NAME, DB_USER, DB_PASSWORD,[PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC]);
    // Realizar operaciones con la conexión
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
};
    //definir clases para conectarnos a la bd
require_once('db.php'); //contantes declaradas
class Config{
    private $idCamper;
    private $nombreCamper;
    private $apellidoCamper;
    private $fechaNac;
    protected $dbCnx;

    public function __construct($idCamper=0, $nombreCamper="", $apellidoCamper="", $fechaNac=""){
        $this->idCamper = $idCamper;
        $this->nombreCamper = $nombreCamper;
        $this->apellidoCamper = $apellidoCamper;
        $this->fechaNac = $fechaNac;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.":dbname=".DB_NAME, DB_USER, DB_PASSWORD,[PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC]);
    }
    public function setIdCamper($idCamper){
        $this-> idCamper =$idCamper;
    }
    public function getIdCamper(){
        return $this->idCamper; //return: del valor del id
    }

    public function setNombreCamper($NombreCamper){
        $this-> NombreCamper =$NombreCamper;
    }
    public function getNombreCamper(){
        return $this->NombreCamper; 
    }

    public function setApellidoCamper($ApellidoCamper){
        $this-> ApellidoCamper =$ApellidoCamper;
    }
    public function getApellidoCamper(){
        return $this->ApellidoCamper; 
    }

    public function setFechaNac($FechaNac){
        $this-> FechaNac =$FechaNac;
    }
    public function getFechaNac(){
        return $this->FechaNac; 
    }
}
?>