<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ConfigPuntosController extends MY_Controller {
    function __construct() {
        parent::__construct();
//         $this->load->model("ConfigPuntosModel");
    }
// EJEMPLO DE FUNCIÓN INDEX
    public function index() {
        $this->load->view('parcial/header_blank');
//         $this->load->view('MainConfigPuntosView');
    }
// EJEMPLO DE PERSISTENCIA
//     public function cargarDatos(){

//       $datos['datos'] = $this->ConfigPuntosModel->getConfig();
//       $this->load->view('GridConfigPuntosView', $datos);
//       // echo json_encode($resultado);
//     }
//     public function crearLog(){

//       $idc = $_REQUEST['id_config'];
//       $datos['datos'] = $this->ConfigPuntosModel->getLog($idc);
//       $this->load->view('GridLogConfigPuntosView',$datos);
//     }
//     public function guardarDatos(){
//       $data = $_REQUEST['data'];
//       $type = $_REQUEST['operation'];
//       $data[12] = $this->session->userdata('usuario');
//       $respuesta = $this->ConfigPuntosModel->saveDataConfig($data,$type);
//       echo json_encode($respuesta);
//     }
//     public function eliminarDatos(){
//       $rowData = $_REQUEST['data'];
//       $respuesta = $this->ConfigPuntosModel->deleteDataConfig($rowData);
//       echo json_encode($respuesta);
//     }

}
