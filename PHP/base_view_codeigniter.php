
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/datatables.min.css"/>

 <div class="container<?php echo (isset($full))?'-fluid':''; ?>">
     <div class="row" >
        <div class="col-md-12">
            <div class="col-md-9 col-xs-7 col-sm-9 " style="padding-left:25px;">
              <h3>Configuración envío de puntos</h3>
            </div>
            <div class="col-md-3 col-xs-5 col-sm-3">
              <img src="<?php echo base_url('assets/imgs/grupo-dp-v1.png')?>" class="pull-right" style="width: 177px;height: 56px;margin-top:10px;margin-right:-35px">
            </div>
        </div>
     </div>
 </div>
  <!-- <hr class="divider-title" style="margin-top: 10px;"> -->


<?php  $this->load->view('parcial/footer'); ?>

</html>
