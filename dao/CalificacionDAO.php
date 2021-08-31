<?php
require_once '../util/conexionBD.php'; 
class CalificacionDAO {
 
    public function InsertarCALIFICACION($ID_TIENDA,$ID_USUARIO,$CALIFICACION) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="INSERT INTO `calificacion`(`ID_TIENDA`, `ID_USUARIO`, `CALIFICACION`) VALUES ($ID_TIENDA,$ID_USUARIO,$CALIFICACION);";
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
    public function BuscarCALIFICACIONdeUSUARIO($ID_TIENDA,$ID_USUARIO) {
        try{
           
            $sql="SELECT * FROM calificacion where ID_TIENDA=$ID_TIENDA AND ID_USUARIO=$ID_USUARIO;";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            $categoria=array();
            while($fila= mysqli_fetch_assoc($rs))
            {
                $categoria[]=$fila;
            }
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    return $categoria; 
    }
    public function ActualizarCALIFICACION($ID_TIENDA,$ID_USUARIO,$CALIFICACION) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="UPDATE `calificacion` SET `CALIFICACION`=$CALIFICACION WHERE `ID_TIENDA`=$ID_TIENDA AND `ID_USUARIO`=$ID_USUARIO";
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
    public function BorrarCALIFICACIONUsuario($ID_TIENDA,$ID_USUARIO,$CALIFICACION) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="UPDATE `calificacion` SET `CALIFICACION`=$CALIFICACION WHERE `ID_TIENDA`=$ID_TIENDA AND `ID_USUARIO`=$ID_USUARIO";
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
    
    
    
}
