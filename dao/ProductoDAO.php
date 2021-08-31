<?php
require_once '../util/conexionBD.php';
require_once '../bean/ProductoBean.php';
require_once '../bean/Personabean.php';

class ProductoDAO {
     public function RegistrarProducto(ProductoBean $objproducto) {
        try {
            $sql="INSERT INTO productos (NOMBRE_PRODUCTO, DESCRIPCION_PRODUCTO,CANTIDAD_PRODUCTO, PRECIO, ID_CAT_PRO, ID_TIENDA) VALUES ('$objproducto->NOMBRE','$objproducto->DESCRIPCION',$objproducto->CANTIDAD,$objproducto->PRECIO,$objproducto->ID_CATEGORIA,$objproducto->ID_TIENDA)";
             //$sql="INSERT INTO PRODUCTO(NOMBRE_SERVICIO,DESCRIPCION_SERVICIO,FECHA_REG_SERVICIO,ID_CAT_SER) VALUES('$objproducto->NOMBRE','$objproducto->DESCRIPCION','$objproducto->FECHA','$objproducto->CANTIDAD','$objproducto->PRECIO','$objservicio->ID_CATEGORIA')" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $e) {
            
        }
          return $i;  
    }
    public function Mostrar_todo_producto() {
         try{
            $sql="SELECT u.CORREO_USUARIO,p.ID_PRODUCTO,p.CANTIDAD_PRODUCTO,p.NOMBRE_PRODUCTO,p.DESCRIPCION_PRODUCTO,p.PRECIO,c.NOMBRE_CAT_PROD FROM productos p INNER JOIN categoria_producto c on p.ID_CAT_PRO=c.ID_CAT_PROD INNER JOIN tienda t on t.ID_TIENDA=p.ID_TIENDA INNER JOIN usuario u on u.ID_USUARIO=t.ID_USUARIO  WHERE p.CANTIDAD_PRODUCTO>0 ";
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
    public function Buscar_todo_producto($objbusqueda_producto) {
         try{
            $sql="SELECT u.CORREO_USUARIO,p.ID_PRODUCTO,p.CANTIDAD_PRODUCTO,p.NOMBRE_PRODUCTO,p.DESCRIPCION_PRODUCTO,p.PRECIO,c.NOMBRE_CAT_PROD FROM productos p INNER JOIN categoria_producto c on p.ID_CAT_PRO=c.ID_CAT_PROD INNER JOIN tienda t on t.ID_TIENDA=p.ID_TIENDA INNER JOIN usuario u on u.ID_USUARIO=t.ID_USUARIO  WHERE p.CANTIDAD_PRODUCTO>0 AND p.NOMBRE_PRODUCTO like('%$objbusqueda_producto%');";
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
    public function Buscar_categoria_todo_producto($objbusqueda) {
         try{
            $sql="SELECT u.CORREO_USUARIO,p.ID_PRODUCTO,p.CANTIDAD_PRODUCTO,p.NOMBRE_PRODUCTO,p.DESCRIPCION_PRODUCTO,p.PRECIO,c.NOMBRE_CAT_PROD FROM productos p INNER JOIN categoria_producto c on p.ID_CAT_PRO=c.ID_CAT_PROD INNER JOIN tienda t on t.ID_TIENDA=p.ID_TIENDA INNER JOIN usuario u on u.ID_USUARIO=t.ID_USUARIO  WHERE p.CANTIDAD_PRODUCTO>0  AND p.ID_CAT_PRO=$objbusqueda;";
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
    
    
    
    public function ListarProducto($objpersona_ID){
         try{
            //$sql="SELECT * FROM TIENDA WHERE ID_USUARIO=$objtienda->ID_USUARIO ;";
            $sql="SELECT * FROM productos p INNER JOIN tienda t ON p.ID_TIENDA=t.ID_TIENDA where t.ID_USUARIO=$objpersona_ID";
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
    
    
    
    public function EliminarProducto(ProductoBean $objproducto) {
        try{
           $sql="DELETE FROM productos WHERE ID_PRODUCTO=$objproducto->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;        
    
    }
    public function ActualizarProducto(ProductoBean $objproducto){
         try{
           $sql="UPDATE productos SET NOMBRE_PRODUCTO='$objproducto->NOMBRE', DESCRIPCION_PRODUCTO='$objproducto->DESCRIPCION',CANTIDAD_PRODUCTO=$objproducto->CANTIDAD,PRECIO=$objproducto->PRECIO WHERE ID_PRODUCTO=$objproducto->ID ;" ;
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;      
        
    }
    public function buscarProducto(ProductoBean $objproducto){
         try{
           $sql="SELECT * FROM productos WHERE ID_TIENDA=$objproducto->ID_TIENDA";
            $obj=new conexionBD();
            $cn=$obj->getConexionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        }catch(Exception $exc){}
        return $i;      
        
    }
}
