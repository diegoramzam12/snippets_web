// .:REQUERIMIENTOS:.
// JQUERY: <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
// CSS: .warning{background:pink !important;border:1px red solid;}
// AÑADIR A CADA INPUT LA CLASE 'entrada': <input type='text' class='entrada'></input>
function validarCampos(){
  var isValid=true;
  $(".entrada").each(function() {
     var element = $(this);
     if (element.val() == "") {
         isValid = false;
         $(this).addClass('warning');
     }
  });
