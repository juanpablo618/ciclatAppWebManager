$(document).ready(function() {

		$("#btnGuardar").click(function(){
         toastr["info"]("Los datos de la tabla se estan cargando...", "<strong></strong>");	
        });

toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "400",
  "hideDuration": "1000",
  "timeOut": "3000",
  "extendedTimeOut": "2000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
});

$(document).ready(function() {

    tablaCompras=$('#tablaCompras').DataTable( {    
        	"paging":   false,
        	"ordering": false,
        	"info":     false,
        	"searching":     false,
    		"ajax":{
            	"url": "conexionmysql/ajaxCompras/bd/consulta.php",
            	"dataSrc":"",
            },
        	"columns":[
            		{"data": "Marca"},
            		{"data": "Modelo"},
            		{"data": "Repuesto"},
            		{"data": "Cantidad"},
            		{"data": "Descripcion"},
            		{"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn btnListo'><i class='fas fa-check'></i></button>"}
            ]
   	 	});

toastr["info"]("Los datos de la tabla se cargaron correctamente", "<strong>Datos Cargados</strong>");

var fila; //captura la fila, para editar o eliminar
//submit para  Actualización
$('#formUsuarios').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    Marca = $.trim($('#Marca').val());    
    Modelo = $.trim($('#Modelo').val());
    Repuesto = $.trim($('#Repuesto').val());                        
    Cantidad = $.trim($('#Cantidad').val());
    Descripcion = $.trim($('#Descripcion').val());                        

        $.ajax({
          url: "conexionmysql/ajaxCompras/bd/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {Marca:Marca,Modelo:Modelo,Repuesto:Repuesto,Cantidad:Cantidad,Cantidad:Cantidad,Descripcion:Descripcion,opcion:opcion},    
          success: function(data) {           
            tablaCompras.ajax.reload(null, false); 
          toastr["success"]("Los datos de la tabla se cargaron correctamente", "<strong>Datos Cargados</strong>");	
			toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "400",
  "hideDuration": "1000",
  "timeOut": "3000",
  "extendedTimeOut": "2000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
           }
        });			        
    $('#modalCRUD').modal('hide');	
	
});

$("#btnAdd").click(function(){
	opcion = 1;
     //alta     
    $("#formUsuarios").trigger("reset");
	$(".modal-title").text("Nueva Tarea de compra");
	$('#modalCRUD').modal('show');

});

$(document).on("click", ".btnListo", function(){
	opcion = 3;
     //editar     
 	fila = $(this).closest("tr");
	Marca = fila.find('td:eq(0)').text();
	Modelo = fila.find('td:eq(1)').text();
	Repuesto = fila.find('td:eq(2)').text();
	Cantidad = fila.find('td:eq(3)').text();
	Descripcion = fila.find('td:eq(4)').text();

	$("#Marca").val(Marca);
	$("#Modelo").val(Modelo);
	$("#Repuesto").val(Repuesto);
	$("#Cantidad").val(Cantidad);
	$("#Descripcion").val(Descripcion);

	$('#modalCRUD').modal('show');

});



});
