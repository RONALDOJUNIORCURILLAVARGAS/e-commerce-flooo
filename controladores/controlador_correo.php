<?php
session_start();
require_once '../dao/ProductoDAO.php'; 
require_once '../dao/ServicioDAO.php';
require_once '../dao/LineaSolicitudDAO.php';
 require './phpmailler/Exception.php';
 require './phpmailler/PHPMailer.php';
 require './phpmailler/SMTP.php';
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$objsolicitudDAO=new LineaSolicitudDAO();
$opcion=$_GET['opcion'];

$lista=$_SESSION['lista'];
foreach ($lista as $value) {
    $id_usuario=$value['ID_USUARIO'];
    $nombre=$value['NOMBRE_USUARIO'];
    $telefono=$value['TELEFONO_USUARIO'];
    $correo=$value['CORREO_USUARIO'];
    $password=$value['PASSWORD_USUARIO'];
}
switch ($opcion)
{
    case 1:{
       $id_producto=$_GET['id_producto']; 
$mensaje=$_GET['txtmensaje'];
$cantidad=$_GET['txtcantidadproducto'];
$correo_envio=$_GET['op'];
$nombre_producto=$_GET['producto'];
 $mail = new PHPMailer(true);
$i=$objsolicitudDAO->InsertarPRODUCTOSolicitudLinea($id_producto,$cantidad,$id_usuario);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $correo;                     // SMTP username
    $mail->Password   = $password;                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($correo, $nombre);//AQUI SE ENVIA CON ESTE CORREO
    $mail->addAddress($correo_envio);     // AQUI LLEGARA EL MENSAJE
    /*
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
    */

    // Attachments
    /*
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    */
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $telefono;
    $mail->Body    = 'Se desea una cantidad de '.$cantidad.' unidades del producto  '.$nombre_producto.' <br>  MENSAJE: <br>  '.$mensaje;
    /*
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    */
    $mail->send();
    //Envio correcto
    $_SESSION['estado_envio_correo']=1;
    } catch (Exception $e) {
        $_SESSION['estado_envio_correo']=2;
    }
     $objproductoDAO=new ProductoDAO();
         $lis=$objproductoDAO->Mostrar_todo_producto();
       $_SESSION['secta_producto']=$lis;
                     //Estado de la existencia de tiendas
       $_SESSION['existe_tienda']=true;
     header('location:../vista/Perfil/productos/perfil_productos.php');

        break;
    }
    case 2:{
       $id_servicio=$_GET['id_servicio'];  
        $mensaje=$_GET['txtmensaje'];
        $correo_envio=$_GET['op'];
        $nombre_servicio=$_GET['servicio'];
         $mail = new PHPMailer(true);
       $i=$objsolicitudDAO->InsertarSERVICIOSolicitudLinea($id_servicio,$id_usuario);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $correo;                     // SMTP username
    $mail->Password   = $password;                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($correo, $nombre);//AQUI SE ENVIA CON ESTE CORREO
    $mail->addAddress($correo_envio);     // AQUI LLEGARA EL MENSAJE
    /*
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
    */

    // Attachments
    /*
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    */
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $telefono;
    $mail->Body    = 'Se desean sus servicio de  '.$nombre_servicio.' <br>  MENSAJE: <br>  '.$mensaje;
    /*
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    */
    $mail->send();
    //Envio correcto
    $_SESSION['estado_envio_correo']=1;
    } catch (Exception $e) {
        $_SESSION['estado_envio_correo']=2;
    }
    
     
            $_SESSION['estado']=true;
             $objservicioDAO =new ServicioDAO();
             $lisa=$objservicioDAO->Mostrar_todo_servicio();
             $_SESSION['secta_servicio']=$lisa;
              //Estado de la existencia de tiendas   
             $_SESSION['existe_tienda']=true;
             header('location:../vista/Perfil/servicios/perfil_servicios.php');
                 
        break;
    }
}

?>