<?php
class ConfigPuntosModel extends CI_Model {

  function __construct() {
    parent::__construct();
//     LIBRERIA NECESARIA PARA WS (INCLUIDA EN ESTRUCTURA DE PORTAL EMPRESARIAL /libraries/webservices.php)
      // $this->load->library('webservices');
//     EJEMPLO DE CONEXION A DB (instancia de config/database.php)
     $this->db = $this->load->database("default", true);
//     EJEMPLO DE CONSUMO DE WS
     // $this->url_devoluciones = "http://10.200.3.102:7082/facturacion_api/s1/SapZbapisd17DevVentas";
 }
// EJEMPLO DE FUNCIONES
//  public function getConfig() {

//    $response = new stdClass;
//    $this->db->db_debug = false; // Quit debug mode.

//    $consulta = $this->db->query("
//     SELECT [id]
//           ,[nombreconf] nombre
//           ,[configftp] ftp
//           ,[usuarioftp] usuario_ftp
//           ,[contrasena] pass
//           ,[ej1diacorte] diac1
//           ,[ej1diaejecucion] diae1
//           ,[ej2diacorte] diac2
//           ,[ej2diaejecucion] diae2
//           ,[usuarioalta] usuario
//           ,format(convert(date,fechaaltaftp),'dd-MM-yyyy')fecha
//           ,[puerto]
//           ,[ftpmailerror] correos
//           ,[estatusconfig] estatus
//       FROM [DPportalEmpresarial].[dbo].[dpcardblueftpconfig] order by id;");

//      $response->result = $consulta->result();

//      return $response->result;

//  }

//  public function getLog($idc){
//    $response = new stdClass;
//    $this->db->db_debug = false; // Quit debug mode.

//    $consulta = $this->db->query("
//    SELECT
//      usuario
//      ,format(CONVERT(DATETIME, CONVERT(VARCHAR(20), fecha, 120)),'dd/MM/yyyy, hh:mm tt') fecha
//      ,case when accion=1 then 'CREACION' else 'MODIFICACION'end accion
//      ,or_config
//      ,new_config
//      FROM [DPportalEmpresarial].[dbo].[dpcardblueftpconfig_log] where id_config=$idc order by id_log_config desc;");

//      $response->result = $consulta->result();

//      return $response->result;
//  }
// public function saveDataConfig($data,$type){
//   $response = new stdClass;
//   $this->db->db_debug = false;
//   $query_save ="";
//   $response = array("configUpdate"=>false,
//                     "logUpdate"=>false,
//                     "icon"=>"error",
//                     "title"=>"Error",
//                     "message"=>"Hubo un error intentar escribir en la base de datos, tabla: [dpcardblueftpconfig]"
//                   );
//   //VALIDANDO SI SE TRATA DE UN REGISTRO NUEVO O UNA MODIFICACION A UN REGISTRO EXISTENTE
//   if($type==1){//INSERT
//     //VALIDANDO QUE NO EXISTA UNA CONFIGURACIÓN CON EL MISMO NOMBRE NI EL MISMO FTP

//     $query_same = $this->db->query("select * from dpcardblueftpconfig where nombreconf='$data[10]' OR configftp='$data[11]';");
//     if($query_same){

//       $result_same = $query_same->result();
//       if(count($result_same)>0){$response["message"] = "Ya existe existe una configuración con el nombre $data[10] o apuntando hacia el servidor $data[11] por favor verifique los datos de captura e intente nuevamente";$response["icon"] = "warning";$response["title"]="Advertencia"; return $response;}
//     }
//     $query_save = "
//       INSERT INTO dpcardblueftpconfig
//       (
//       	nombreconf,
//       	configftp,
//         usuarioftp,
//       	contrasena,
//       	ej1diacorte,
//       	ej1diaejecucion,
//       	ej2diacorte,
//       	ej2diaejecucion,
//       	usuarioalta,
//       	puerto,
//       	ftpmailerror,
//       	estatusconfig
//       ) VALUES (
//         '$data[10]'
//         ,'$data[11]'
//         ,'$data[1]'
//         ,'$data[2]'
//         ,$data[3]
//         ,$data[4]
//         ,$data[5]
//         ,$data[6]
//         ,'$data[12]'
//         ,'$data[7]'
//         ,'$data[8]'
//         ,1
//       );
//     ";
//   }else{
//     //UPDATE
//     $query_save = "
//       UPDATE dpcardblueftpconfig
//       SET
//       	nombreconf='$data[10]',
//         configftp='$data[11]',
//         usuarioftp='$data[1]',
//         contrasena='$data[2]',
//         ej1diacorte=$data[3],
//         ej1diaejecucion=$data[4],
//         ej2diacorte=$data[5],
//         ej2diaejecucion=$data[6],
//         usuarioalta='$data[12]',
//         puerto='$data[7]',
//         ftpmailerror='$data[8]',
//         estatusconfig=$data[9]
//       WHERE id=$data[0];
//     ";
//     // die($query_save);
//   }

//   //PREPARANDO DATOS PARA EL LOG

//   $enabled = ($data[9]==1)?"Activo":"Inactivo";
//   $id_config = $data[0];
//   $originalConfig = "N/A";
//   $newConfig = "$data[10]|$data[11]|$data[1]|$data[2]|$data[3]|$data[4]|$data[5]|$data[6]|$data[12]|$data[7]|$data[8]|$enabled";
//   $result_config = $this->db->query("select concat(
//   [nombreconf]
//   ,'|',[configftp]
//   ,'|',[usuarioftp]
//   ,'|',[contrasena]
//   ,'|',[ej1diacorte]
//   ,'|',[ej1diaejecucion]
//   ,'|',[ej2diacorte]
//   ,'|',[ej2diaejecucion]
//   ,'|',[usuarioalta]
//   ,'|',[puerto]
//   ,'|',[ftpmailerror]
//   ,'|',case when [estatusconfig]=1 then 'Activo' else 'Inactivo' end) originalConfig
//   from dpcardblueftpconfig where id=$data[0]")->result();
//   $response["configUpdate"] = $this->db->query($query_save);
//   if(count($result_config)>0){
//     $originalConfig = $result_config[0]->originalConfig;
//   }else{

//     $result_idConfig =  $this->db->query("select max(id) id from dpcardblueftpconfig where usuarioalta = '$data[12]';")->result();

//     $id_config = $result_idConfig[0]->id;
//   }
//   $query_log = "INSERT INTO dpcardblueftpconfig_log (usuario,accion,or_config,new_config,id_config)
//   VALUES('$data[12]',$type,'$originalConfig','$newConfig',$id_config);";

//   ///////////////////////////////////////////////////////////////////////////////
//   //VALIDANDO SI SE VA A ESCRIBIR EN EL LOG Y ARMANDO LOS MENSAJES
//   if($response["configUpdate"]){

//     $response["icon"] = "success";
//     $response["title"] = "Registro exitoso";
//     $response["message"] = "Los cambios se guardaron correctamente";

//     $response["logUpdate"] = $this->db->query($query_log);

//     // die(var_dump($response["logUpdate"]));
//     if(!$response["logUpdate"]){$response["message"] = "Cambios guardados, error al actualizar el log, tabla: [dpcardblueftpconfig_log]";$response["icon"] = "warning";$response["title"]="Advertencia";}
//   }

//     return $response;
// }
// public function deleteDataConfig($data){
//   $response = new stdClass;
//   $this->db->db_debug = false; // Quit debug mode.
//   $response = array("configDelete"=>false,
//                     "logUpdate"=>false,
//                     "icon"=>"error",
//                     "title"=>"Error",
//                     "message"=>"Hubo un error intentar eliminar el registro en la base de datos, tabla: [dpcardblueftpconfig]"
//                   );
//   $response["configDelete"] = $this->db->query("Delete from dpcardblueftpconfig where id=$data[0];");
//   if($response["configDelete"]){
//     $response["icon"]="success";
//     $response["title"]="Eliminación exitosa";
//     $response["message"]="Se eliminó correctamente el registro.";
//     $query_log = "INSERT INTO dpcardblueftpconfig_log (usuario,accion,or_config,new_config,id_config)
//     VALUES('$data[12]',3,'N/A','N/A',$data[0]);";
//     $response["logUpdate"] = $this->db->query($query_log);
//     if(!$response["logUpdate"]){$response["message"] = "Registro eliminado, error al actualizar el log, tabla: [dpcardblueftpconfig_log]";$response["icon"] = "warning";$response["title"]="Advertencia";}
//   }

//     return $response;
// }

}
