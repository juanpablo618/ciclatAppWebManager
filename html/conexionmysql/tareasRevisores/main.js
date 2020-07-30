$(document).ready(function() {

tablaBenja= $('#tablaBenja').DataTable( { 
			
        	"paging":   false,
        	"ordering": false,
        	"info":     false,
        	"searching":     false,
			dom:'Bfrtip',
			 buttons: [
             {
            text: '<i class="fas fa-file-excel"><i>',
            extend: 'excelHtml5',
            titleAttr: 'Tabla Benja',
            className: 'btn btn-success'
             },
        	{
            text: '<i class="fas fa-print"><i>',
            extend: 'print',
            titleAttr: 'Imprimir',
            className: 'btn btn-info'
             },{
            text: 'Actualizar Tablas',
            action: function ( e, dt, node, config ) {
			tablaBenja.ajax.reload(null, false);
            tablaFelipe.ajax.reload(null, false);
            tablaLucrecio.ajax.reload(null, false);
            },
        }
    ],
    		"ajax":{
            	"url": "/conexionmysql/tareasRevisores/consultas/consulta1.php",
            	"dataSrc":""
            },
        	"columns":[
            		{"data": "IMEI"},
            		{"data": "Riesgo"},
            		{"data": "Tiempo"},
            		{"data": "Descripcion"},
            		{"data": "Revisor"},
            		{"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn btnListo'>Listo</button>"}
            ]
   	 	});
		
tablaFelipe=	$('#tablaFelipe').DataTable( { 
			dom:'Bfrtip',
			buttons: [
        {
            text: '<i class="fas fa-file-excel"><i>',
            extend: 'excelHtml5',
            titleAttr: 'Tabla Felipe',
            className: 'btn btn-success'
             },
            {
            text: '<i class="fas fa-print"><i>',
            extend: 'print',
            titleAttr: 'Imprimir',
            className: 'btn btn-info'
             },{
            text: 'Actualizar Tablas',
            action: function ( e, dt, node, config ) {
			tablaBenja.ajax.reload(null, false);
            tablaFelipe.ajax.reload(null, false);
            tablaLucrecio.ajax.reload(null, false);            }
        }
    ],
        	"paging":   false,
        	"ordering": false,
        	"info":     false,
        	"searching":     false,
    		"ajax":{
            	"url": "/conexionmysql/tareasRevisores/consultas/consulta2.php",
            	"dataSrc":""
            },
        	"columns":[
            		{"data": "IMEI"},
            		{"data": "Riesgo"},
            		{"data": "Tiempo"},
            		{"data": "Descripcion"},
            		{"data": "Revisor"},
            		{"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn btnListo'>Listo</button>"}
            ]
   	 	});

tablaLucrecio=	$('#tablaLucre').DataTable( {
			dom:'Bfrtip',
			buttons: [
        {
            text: '<i class="fas fa-file-excel"><i>',
            extend: 'excelHtml5',
            titleAttr: 'Tabla Lucre',
            className: 'btn btn-success'
             },
            {
            text: '<i class="fas fa-print"><i>',
            extend: 'print',
            titleAttr: 'Imprimir',
            className: 'btn btn-info'
             },{
            text: 'Actualizar Tablas',
            action: function ( e, dt, node, config ) {
			tablaBenja.ajax.reload(null, false);
            tablaFelipe.ajax.reload(null, false);
            tablaLucrecio.ajax.reload(null, false);            }
        }
    ],
        	"paging":   false,
        	"ordering": false,
        	"info":     false,
        	"searching":     false,
    		"ajax":{
            	"url": "/conexionmysql/tareasRevisores/consultas/consulta3.php",
            	"dataSrc":""
            },
        	"columns":[
            		{"data": "IMEI"},
            		{"data": "Riesgo"},
            		{"data": "Tiempo"},
            		{"data": "Descripcion"},
            		{"data": "Revisor"},
            		{"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn btnListo'>Listo</button>"}
            ]
   	 	});

$(document).on("click", ".btnListo", function(){
opcion = 1;
     //editar     
 	fila = $(this).closest("tr");
	IMEI = fila.find('td:eq(0)').text();
	Riesgo = fila.find('td:eq(1)').text();
	Tiempo = fila.find('td:eq(2)').text();
	Descripcion = fila.find('td:eq(3)').text();
	Revisor = fila.find('td:eq(4)').text();

	$("#IMEI").val(IMEI);
	$("#Riesgo").val(Riesgo);
	$("#Tiempo").val(Tiempo);
	$("#Descripcion").val(Descripcion);
	$("#Revisor").val(Revisor);

	$(".modal-title").text("Finalizar matcheo!");
	$('#modalCRUD2').modal('show');

});

$("#btnGuardar").click(function(){
         toastr["info"]("Limpiando Tarea", "<strong>Se quitara la tarea asignada</strong>");	
        });
toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "2000",
  "hideDuration": "2000",
  "timeOut": "3000",
  "extendedTimeOut": "2000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};

$('#formUsuarios1').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    IMEI = $.trim($('#IMEI').val());    
    Riesgo = $.trim($('#Riesgo').val());
    Tiempo = $.trim($('#Tiempo').val());                        
    Descripcion = $.trim($('#Descripcion').val());                        
    Revisor = $.trim($('#Revisor').val());                        

        $.ajax({
          url: "http://localhost/ciclatAppWebManager/html/conexionmysql/ajax/baseDeDatos/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {IMEI:IMEI, Riesgo:Riesgo,Tiempo:Tiempo,Descripcion:Descripcion,Revisor:Revisor,opcion:opcion},    
          success: function(data) {
            tablaBenja.ajax.reload(null, false);
            tablaFelipe.ajax.reload(null, false);
            tablaLucrecio.ajax.reload(null, false); 
          toastr["success"]("Se asigno limpio la tarea del revisor", "<strong>Puede volver a asignarla si lo desea</strong>");	
			toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "2000",
  "hideDuration": "2000",
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
