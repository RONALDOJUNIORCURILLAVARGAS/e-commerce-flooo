<?php
require_once '../util/conexionBD.php'; 
require_once '../bean/Personabean.php'; 
class PersonaDAO {
    /*Se crea una funcion para el registro de usuarios*/
    public function InsertarUsuario(Personabean $objPersonaBean){
        try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="INSERT INTO USUARIO(APELLIDO_USUARIO,NOMBRE_USUARIO,PASSWORD_USUARIO,CORREO_USUARIO,DIRECCION_USUARIO,DNI_USUARIO,TELEFONO_USUARIO) VALUES('$objPersonaBean->APELLIDO','$objPersonaBean->NOMBRE','$objPersonaBean->PASS','$objPersonaBean->USUARIO','$objPersonaBean->DIRECCION','$objPersonaBean->DNI','$objPersonaBean->CELULAR')";
            /*Creamos un objeto referente a la conexion*/
            $objc=new conexionBD();
            /*Creamos la conexion*/
            $cn=$objc->getConexionBD();
            /*Ejecutamos el query dentro de la conexion a la Base de Datos*/
            $i= mysqli_query($cn,$sql);
            /*Cerramos la conexion a la base de datos*/
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    /*Retorna un estado de la ejecucion por default es 0 v null si no se ejecuto*/
    return $i;
    }
    public function IngresarUsuario(Personabean $objPersonaBean) {
        try{
            /*Consulta del usuario mediante DML(Query)*/
            $sql="SELECT * FROM USUARIO WHERE CORREO_USUARIO='$objPersonaBean->USUARIO'  AND  PASSWORD_USUARIO='$objPersonaBean->PASS' ; ";
             /*Creamos un objeto referente a la conexion*/
            $objc=new conexionBD();
            /*Creamos la conexion*/
            $cn=$objc->getConexionBD();
            /*Ejecutamos el query dentro de la conexion a la Base de Datos*/
            $rs=mysqli_query($cn,$sql);
             
              /*Creamos un array para capturar los elementos de la consulta realizada*/
                $lista=array();
                //si exite
            if($rs)
            {       
            /*Capturamos las filas del resultado de la consulta por medio del while*/
            while($fila=mysqli_fetch_assoc($rs))
            {
                /*Se inserta las filas en el array creado para usarlo posteriormente*/
                $lista[]=$fila;
            } 
            }
            else{
                $lista=null;
            }
            
           
            /*Cerramos la conexion*/
            mysqli_close($cn);   
        }
        catch(Exception $exc){
        }
        /*Retornamos el valor del array o en caso de no ejecutarse correctamente es 0 v null*/
        return $lista;
    }
    public function VerificarUsuario(Personabean $objPersonaBean){
        try{
             /*Consulta del usuario mediante DML(Query)*/
            $sql="SELECT * FROM USUARIO WHERE CORREO_USUARIO='$objPersonaBean->USUARIO'; ";
             /*Creamos un objeto referente a la conexion*/
            $objc=new conexionBD();
            /*Creamos la conexion*/
            $cn=$objc->getConexionBD();
            /*Ejecutamos el query dentro de la conexion a la Base de Datos*/
            $rs=mysqli_query($cn,$sql);
             
              /*Creamos un array para capturar los elementos de la consulta realizada*/
                $lista=array();
                //si exite
            if($rs)
            {       
            /*Capturamos las filas del resultado de la consulta por medio del while*/
            while($fila=mysqli_fetch_assoc($rs))
            {
                /*Se inserta las filas en el array creado para usarlo posteriormente*/
                $lista[]=$fila;
            } 
            }
            else{
                $lista=null;
            }
            
           
            /*Cerramos la conexion*/
            mysqli_close($cn);
        }
        catch(Exception $exc){      
        }
        return $lista;
    }
    public function ActualizarUsuario(Personabean $objPersonaBean) {
        try{
            $sql="UPDATE USUARIO SET APELLIDO_USUARIO='$objPersonaBean->APELLIDO',NOMBRE_USUARIO='$objPersonaBean->NOMBRE',DIRECCION_USUARIO='$objPersonaBean->DIRECCION',DNI_USUARIO='$objPersonaBean->DNI',TELEFONO_USUARIO='$objPersonaBean->CELULAR' WHERE ID_USUARIO=$objPersonaBean->ID; ";
            $objc=new conexionBD();
             $cn=$objc->getConexionBD();
            $i= mysqli_query($cn,$sql);
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }  /*Retorna un estado de la ejecucion por default es 0 v null si no se ejecuto*/
    return $i;
    }
    /*
A partir de aqui no se ejecutan ninguna de estas funciones, no sirven
        */
    public function EliminarPersonas(Personabean $objPersonaBean){
        $i=0;
        try{
            $sql="delete from persona where CODPERSO='$objPersonaBean->CODPERSO';";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $i= mysqli_query($cn,$sql);
            mysqli_close($cn);
              
        }
        catch(Exception $exc){
          }
          return $i;
    }
  
}

?>