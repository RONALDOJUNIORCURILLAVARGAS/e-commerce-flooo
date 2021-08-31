<?php
require_once '../util/conexionBD.php'; 
require_once '../bean/Tiendabean.php';

class TiendaDAO {
    public function InsertarTienda(Tiendabean $objtienda) {
        try{
           $sql="INSERT INTO TIENDA(NOMBRE_TIENDA,DESCRIPCION_TIENDA,UBICACION_TIENDA,ID_USUARIO) VALUES('$objtienda->NOMBRE','$objtienda->DESCRIPCION','$objtienda->UBICACION','$objtienda->ID_USUARIO'); " ;
           
           $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;        
    }
    public function Mostrar_toda_tienda() {
         try{
            $sql="SELECT t.ID_TIENDA,t.NOMBRE_TIENDA,t.DESCRIPCION_TIENDA,t.UBICACION_TIENDA,AVG(c.CALIFICACION) as CALIFICAION_PROM FROM tienda t INNER JOIN calificacion c on t.ID_TIENDA=c.ID_TIENDA GROUP BY t.ID_TIENDA,t.NOMBRE_TIENDA,t.DESCRIPCION_TIENDA,t.UBICACION_TIENDA ORDER BY CALIFICAION_PROM desc;";
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
    public function Insertarcalificaciondefault(Tiendabean $objtienda) {
        try{
           $sql="INSERT INTO calificacion(ID_TIENDA, ID_USUARIO, CALIFICACION) VALUES ($objtienda->ID,$objtienda->ID_USUARIO,0);"; 
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }
        catch(Exception $ex){
            
        }
        return $i;
        
    }
    public function BuscarIDtienda(Tiendabean $objtienda){
         try{
            //$sql="SELECT * FROM TIENDA WHERE ID_USUARIO=$objtienda->ID_USUARIO ;";
            $sql="SELECT ID_TIENDA FROM tienda WHERE NOMBRE_TIENDA='$objtienda->NOMBRE';";
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
    
    public function ListarTienda(Tiendabean $objtienda){
         try{
            //$sql="SELECT * FROM TIENDA WHERE ID_USUARIO=$objtienda->ID_USUARIO ;";
            //$sql="SELECT * FROM TIENDA T INNER JOIN usuario u on T.ID_USUARIO=u.ID_USUARIO WHERE u.ID_USUARIO=$objtienda->ID_USUARIO;";
            $sql="SELECT T.ID_TIENDA,T.NOMBRE_TIENDA,T.DESCRIPCION_TIENDA,T.UBICACION_TIENDA,AVG(c.CALIFICACION) as PROM_CALIFICACION FROM TIENDA T INNER JOIN usuario u on T.ID_USUARIO=u.ID_USUARIO INNER JOIN calificacion c on T.ID_TIENDA=c.ID_TIENDA  WHERE u.ID_USUARIO=$objtienda->ID_USUARIO GROUP BY T.NOMBRE_TIENDA,T.DESCRIPCION_TIENDA,T.UBICACION_TIENDA ;";
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
    public function EliminarCalificacion(Tiendabean $objtienda) {
        try{
            /*$sql="DELETE FROM calificacion WHERE ID_USUARIO=$objtienda->ID_USUARIO AND ID_TIENDA=$objtienda->ID ;" ;*/
           $sql="DELETE FROM calificacion WHERE ID_TIENDA=$objtienda->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;        
    
    }
    public function EliminarTienda(Tiendabean $objtienda) {
        try{
           $sql="DELETE FROM TIENDA WHERE ID_TIENDA=$objtienda->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;        
    
    }
    public function ActualizarTienda(Tiendabean $objtienda){
         try{
           $sql="UPDATE TIENDA SET NOMBRE_TIENDA='$objtienda->NOMBRE', UBICACION_TIENDA='$objtienda->UBICACION',DESCRIPCION_TIENDA='$objtienda->DESCRIPCION' WHERE ID_TIENDA=$objtienda->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;      
        
    }
    public function buscarTienda(Tiendabean $objtienda){
         try{
           $sql="SELECT * FROM TIENDA WHERE ID_USUARIO=$objtienda->ID_USUARIO";
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;      
        
    }
}
