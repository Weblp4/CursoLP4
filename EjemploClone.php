<?php
 
class info {
 private $nombre;
 private $apellido;
 private $edad;
 
public function __construct($nom,$lname, $age)
 {
    $this->nombre = $nom;
    $this->apellido = $lname;
    $this->edad = $age;
 }
  
public function nombree()
 {
    echo "El nombre es ".$this->nombre;
    echo '
';
 }
  
public function apellidoo()
 {
    echo "El apellido es ".$this->apellido;
    echo '
';
 }
  
public function edadd()
 {
    echo "La edad de ".$this->nombre." es ".$this->edad;
    echo '
';
 } 
  
public function mostrar()
 {
    echo $this->nombree();
    echo $this->apellidoo();
    echo $this->edadd();
  
 }
  
}//Fin de la clase
  
$info = new info('Yoya','hack', '99');
$info->mostrar();
  
?>