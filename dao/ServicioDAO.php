<?php
require_once '../util/conexionBD.php';
require_once '../bean/ServicioBean.php';

class ServicioDAO {
    public function RegistrarServicio(ServicioBean $objservicio) {
        try {
            
            $sql="INSERT INTO servicios (NOMBRE_SERVICIO, DESCRIPCION_SERVICIO,ID_CAT_SER, ID_TIENDA) VALUES ('$objservicio->NOMBRE','$objservicio->DESCRIPCION',$objservicio->ID_CATEGORIA,$objservicio->ID_TIENDA)";
            //$sql="INSERT INTO  servicios(DESCRIPCION_SERVICIO,FECHA_REG_SERVICIO,ID_CAT_SER,NOMBRE_SERVICIO) VALUES('$objservicio->DESCRIPCION','$objservicio->FECHA', $objservicio->ID_CATEGORIA,'$objservicio->NOMBRE')";
             //$sql="INSERT INTO servicios(NOMBRE_SERVICIO,DESCRIPCION_SERVICIO,FECHA_REG_SERVICIO,ID_CAT_SER,ID_TIENDA) VALUES('$objservicio->NOMBRE','$objservicio->DESCRIPCION','$objservicio->FECHA',$objservicio->ID_CATEGORIA,$objservicio->ID_TIENDA)" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $e) {
            
        }
        return $i;    
    }
     public function Mostrar_todo_servicio() {
         try{
            $sql="SELECT u.CORREO_USUARIO,s.ID_SERVICIO,s.NOMBRE_SERVICIO,s.DESCRIPCION_SERVICIO,c.NOMBRE_CAT_SERV FROM servicios s INNER JOIN categoria_servicios c on s.ID_CAT_SER=c.ID_CAT_SERV  INNER JOIN tienda t on t.ID_TIENDA=s.ID_TIENDA INNER JOIN usuario u on u.ID_USUARIO=t.ID_USUARIO ;";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs= mysqli_query($cn,$sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs))
            {
                $lista[]=$fila;
            }
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    return $lista; 
        
    }
    public function Buscar_todo_servicio($objbusqueda) {
         try{
            $sql="SELECT u.CORREO_USUARIO,s.ID_SERVICIO,s.NOMBRE_SERVICIO,s.DESCRIPCION_SERVICIO,c.NOMBRE_CAT_SERV FROM servicios s INNER JOIN categoria_servicios c on s.ID_CAT_SER=c.ID_CAT_SERV  INNER JOIN tienda t on t.ID_TIENDA=s.ID_TIENDA INNER JOIN usuario u on u.ID_USUARIO=t.ID_USUARIO WHERE s.NOMBRE_SERVICIO like('%$objbusqueda%');";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs= mysqli_query($cn,$sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs))
            {
                $lista[]=$fila;
            }
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    return $lista; 
        
    }
    public function Buscar_categoria_todo_servicio($objbusqueda) {
         try{
            $sql="SELECT u.CORREO_USUARIO,s.ID_SERVICIO,s.NOMBRE_SERVICIO,s.DESCRIPCION_SERVICIO,c.NOMBRE_CAT_SERV FROM servicios s INNER JOIN categoria_servicios c on s.ID_CAT_SER=c.ID_CAT_SERV  INNER JOIN tienda t on t.ID_TIENDA=s.ID_TIENDA INNER JOIN usuario u on u.ID_USUARIO=t.ID_USUARIO WHERE s.ID_CAT_SER=$objbusqueda;";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs= mysqli_query($cn,$sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs))
            {
                $lista[]=$fila;
            }
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    return $lista; 
        
    }
    
   
    public function ListarServicio($objusuario_ID){
         try{

            $sql="SELECT * FROM servicios s INNER JOIN tienda t ON s.ID_TIENDA=t.ID_TIENDA where t.ID_USUARIO=$objusuario_ID ";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs= mysqli_query($cn,$sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs))
            {
                $lista[]=$fila;
            }
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    return $lista; 
    }
    
    
    
    
    
    
    
    
    public function EliminarServicio(ServicioBean $objservicio) {
        try{
           $sql="DELETE FROM servicios WHERE ID_SERVICIO=$objservicio->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;        
    
    }
    public function ActualizarServicio(ServicioBean $objservicio){
         try{
           $sql="UPDATE servicios SET NOMBRE_SERVICIO='$objservicio->NOMBRE', DESCRIPCION_SERVICIO='$objservicio->DESCRIPCION',ID_CAT_SER=$objservicio->ID_CATEGORIA,ID_TIENDA=$objservicio->ID_TIENDA WHERE ID_SERVICIO=$objservicio->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;      
        
    }
    public function buscarServicio(ServicioBean $objservicio){
         try{
           $sql="SELECT * FROM servicios WHERE ID_TIENDA=$objservicio->ID_TIENDA";
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;      
        
    }
}
