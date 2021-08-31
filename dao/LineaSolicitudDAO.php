<?php
require_once '../util/conexionBD.php'; 
class LineaSolicitudDAO {
    public function InsertarPRODUCTOSolicitudLinea($ID_PRODUCTO,$CANTIDAD,$ID_USUARIO) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="INSERT INTO `linea_solicitud`(ID_PRODUCTO,CANTIDAD,ID_USUARIO) VALUES ($ID_PRODUCTO,$CANTIDAD,$ID_USUARIO);";
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
    public function InsertarSERVICIOSolicitudLinea($ID_SERVICIO,$ID_USUARIO) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="INSERT INTO `linea_solicitud`(ID_SERVICIO,ID_USUARIO) VALUES ($ID_SERVICIO,$ID_USUARIO);";
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
     public function BorrarSolicitudLineaProducto($ID_PRODUCTO) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="DELETE FROM `linea_solicitud` WHERE ID_PRODUCTO=$ID_PRODUCTO;";
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
    public function BorrarSolicitudLineaServicio($ID_SERVICIO) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="DELETE FROM `linea_solicitud` WHERE ID_SERVICIO=$ID_SERVICIO;";
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
    public function BorrarSolicitudLineaUsuario($ID_USUARIO) {
         try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="DELETE FROM `linea_solicitud` WHERE ID_USUARIO=$ID_USUARIO;";
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
   public function ListarmisSolicitudes($ID_USUARIO) {
        try{
           
            $sql="SELECT u.ID_USUARIO,t.NOMBRE_TIENDA,p.NOMBRE_PRODUCTO,l.CANTIDAD from usuario u INNER join linea_solicitud l on l.ID_USUARIO=u.ID_USUARIO INNER JOIN productos p on p.ID_PRODUCTO=l.ID_PRODUCTO INNER JOIN tienda t on t.ID_TIENDA=p.ID_TIENDA WHERE u.ID_USUARIO=$ID_USUARIO; ";
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
    public function ListarmisSolicitudesser($ID_USUARIO) {
        try{
           
            $sql="SELECT u.ID_USUARIO,t.NOMBRE_TIENDA,s.NOMBRE_SERVICIO from usuario u INNER join linea_solicitud l on l.ID_USUARIO=u.ID_USUARIO INNER JOIN servicios s on s.ID_SERVICIO=l.ID_SERVICIO INNER JOIN tienda t on t.ID_TIENDA=s.ID_TIENDA WHERE u.ID_USUARIO=$ID_USUARIO;";
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
    
}
