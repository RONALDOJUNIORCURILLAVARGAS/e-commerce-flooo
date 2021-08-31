<?php
class conexionBD {
 const server="localhost";
 const user="root";
 const pass="";
 const database="flooop";
 private $cn= null;
 public function getConexionBD(){
     try{
         $this->cn= mysqli_connect(self::server,self::user,self::pass, self::database);
     }
     catch(Exception $exc){
         
     }
     return $this->cn; 
 }
    
}
?>
