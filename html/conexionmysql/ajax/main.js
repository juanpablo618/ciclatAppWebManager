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

		$("#btnGuardar1").click(function(){
         toastr["info"]("Asignando tarea...", "<strong>Aguarde mientras se asigna el matcheo al revisor</strong>");	
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

    tablaPrueba=$('#tablaPrueba').DataTable( {    
        	"paging":   false,
        	"ordering": false,
        	"info":     false,
        	"searching":     false,
    		"ajax":{
            	"url": "baseDeDatos/consulta.php",
            	"dataSrc":""
            },
        	"columns":[
            		{"data": "Marca"},
            		{"data": "Modelo"},
            		{"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn btnEditar'>Cambiar</button>"}
            ]
   	 	});

	tablaMatcheos=$('#tablaMatcheos').DataTable( {
    		select: {
    			style: 'multi'
   					 },
   			scrollY:400,
    		scrollX:true,
    		scrollCollapse: true,
    lengthMenu:[[10,25,50,-1],['de a 10','de a 25','de a 50','Todos']],

    		"order": [[ 1, "asc" ]],
    
        	"ajax":{
            	"url": "baseDeDatos/consulta2.php",
            	"dataSrc":""
            },
        	"columns":[
            		{"data": "IMEI"},
            		{"data": "Riesgo"},
           			{"data": "Tiempo"},
           			{"data": "Descripcion"},
            		{"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn btnAsignar'>Asignar</button>"}
            ]
   	 	});
    
	toastr["success"]("Los datos de la tabla se cargaron correctamente", "<strong>Datos Cargados</strong>");	


var fila; //captura la fila, para editar o eliminar
//submit para  Actualización
$('#formUsuarios').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    Marca = $.trim($('#Marca').val());    
    Modelo = $.trim($('#Modelo').val());                        
        $.ajax({
          url: "baseDeDatos/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {Marca:Marca, Modelo:Modelo,opcion:opcion},    
          success: function(data) {
            tablaMatcheos.ajax.reload(null, false);
            tablaPrueba.ajax.reload(null, false); 
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

$(document).on("click", ".btnEditar", function(){
opcion = 2;
     //editar     
 	fila = $(this).closest("tr");
	Marca = fila.find('td:eq(0)').text();
	Modelo = fila.find('td:eq(1)').text();
	$("#Marca").val(Marca);
	$("#Modelo").val(Modelo);

// cambiamos modal show
    $('#modalCRUD').show();
	$(".modal-title").text("Elegir que telefonos Matchear");
	

});

$(document).on("click", ".btnAsignar", function(){
opcion = 3;
     //editar     
 	fila = $(this).closest("tr");
	IMEI = fila.find('td:eq(0)').text();
	Riesgo = fila.find('td:eq(1)').text();
	Tiempo = fila.find('td:eq(2)').text();
	Descripcion = fila.find('td:eq(3)').text();

	$("#IMEI").val(IMEI);
	$("#Riesgo").val(Riesgo);
	$("#Tiempo").val(Tiempo);
	$("#Descripcion").val(Descripcion);

	$(".modal-title").text("Elegir a Quien Asignar Matcheo");
	$('#modalCRUD2').modal('show');

});

$('#formUsuarios1').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    IMEI = $.trim($('#IMEI').val());    
    Riesgo = $.trim($('#Riesgo').val());
    Tiempo = $.trim($('#Tiempo').val());                        
    Descripcion = $.trim($('#Descripcion').val());                        
    Revisor = $.trim($('#Revisor').val());                        

        $.ajax({
          url: "baseDeDatos/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {IMEI:IMEI, Riesgo:Riesgo,Tiempo:Tiempo,Descripcion:Descripcion,Revisor:Revisor,opcion:opcion},    
          success: function(data) {
            tablaMatcheos.ajax.reload(null, false);
            tablaPrueba.ajax.reload(null, false); 
          toastr["success"]("Se asigno correctamente la tarea al revisor", "<strong>Verifique en las tablas</strong>");	
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
    $('#modalCRUD2').modal('hide');	
	
});
});

