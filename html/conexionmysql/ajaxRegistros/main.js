$(document).ready(function() {
    var user_id, opcion;
    opcion = 4;
        
	$('#tablaRegistros tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar en '+title+'" />' );
    } );

    tablaRegistros = $('#tablaRegistros').DataTable({
    	select: {
            style: 'multi',
            blurable: true
        },
   scrollY:400,
    scrollX:true,
    lengthMenu:[[10,25,50,-1],['de a 10','de a 25','de a 50','Todos']],
    scrollCollapse: true,
    	    order: [[5, 'desc']],
        "ajax":{            
            "url": "http://localhost/ciclatAppWebManager/html/conexionmysql/ajaxRegistros/db/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-warning btn-sm btnEditar'><span class='fas fa-edit' aria-hidden='true'></span></button><button class='btn btn-danger btn-sm btnBorrar'><span class='fas fa-trash' aria-hidden='true'></span></button><button class='btn btn-success btn-sm btnVendido'><span class='fas fa-check' aria-hidden='true'></span>Vendido </button></div></div>"},
            {"data": "ID"},
        	{"data": "IMEI"},
            {"data": "Marca"},
            {"data": "Modelo"},
            {"data": "Fecha"},
            {"data": "Estado"},
            {"data": "Revisor"},
            {"data": "GB"},
            {"data": "Color"},
            {"data": "Estetica"},
            {"data": "Carcasa"},
            {"data": "CamaraTrasera"},
            {"data": "CamaraDelantera"},
            {"data": "PinCarga"},
            {"data": "Auriculares"},
            {"data": "ParlanteFrontal"},
            {"data": "ParlanteTrasero"},
            {"data": "SensorProx"},
            {"data": "Bateria"},
            {"data": "BateriaPorcentaje"},
            {"data": "Wifi"},
            {"data": "Bluetooth"},
            {"data": "Vidrio"},
            {"data": "Modulo"},
            {"data": "Traslucido"},
            {"data": "Otros"},
            {"data": "Lugar"},
            {"data": "Liberar"},
			{"data": "PortaSim"},
        	{"data": "Microfono"},
            {"data": "Botones"},
            {"data": "Tactil"},
            {"data": "version"}
        ]
    });     
    
	tablaRegistros.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer([6,7,8,9]) ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var fila; //captura la fila, para editar o eliminar

    //submit para el Alta y Actualización
    $('#formUsuarios').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        ID = $.trim($('#ID').val());

        Marca = $.trim($('#Marca').val());
        IMEI =$.trim($('#IMEI').val());
        Modelo = $.trim($('#Modelo').val());
        Fecha = $.trim($('#Fecha').val());
        Estado = $.trim($('#Estado').val());
        Revisor = $.trim($('#Revisor').val());
        GB = $.trim($('#GB').val());
        Color = $.trim($('#Color').val());
        Estetica = $.trim($('#Estetica').val());
        Carcasa = $.trim($('#Carcasa').val());
        CamaraTrasera = $.trim($('#CamaraTrasera').val());
        CamaraDelantera = $.trim($('#CamaraDelantera').val());
        PinCarga = $.trim($('#PinCarga').val());
        Auriculares = $.trim($('#Auriculares').val());
        ParlanteFrontal = $.trim($('#ParlanteFrontal').val());
        ParlanteTrasero = $.trim($('#ParlanteTrasero').val());
        SensorProx = $.trim($('#SensorProx').val());
        Bateria = $.trim($('#Bateria').val());
        BateriaPorcentaje = $.trim($('#BateriaPorcentaje').val());
        Wifi = $.trim($('#Wifi').val());
        Bluetooth = $.trim($('#Bluetooth').val());
        Vidrio = $.trim($('#Vidrio').val());
        Modulo = $.trim($('#Modulo').val());
        Traslucido = $.trim($('#Traslucido').val());
        Otros = $.trim($('#Otros').val());
        Lugar = $.trim($('#Lugar').val());
        Liberar = $.trim($('#Liberar').val());
        PortaSim = $.trim($('#PortaSim').val());
        Microfono = $.trim($('#Microfono').val());
        Botones = $.trim($('#Botones').val());
        Tactil = $.trim($('#Tactil').val());
        version = $.trim($('#version').val());
    	
            $.ajax({
              url: "http://localhost/ciclatAppWebManager/html/conexionmysql/ajaxRegistros/db/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {
              	ID:ID,
              	IMEI:IMEI,
              	Marca:Marca,
              	Modelo:Modelo,
              	Fecha:Fecha,
              	Revisor:Revisor,	
              	GB:GB,
              	Color:Color,
              	Estetica:Estetica,
              	Carcasa:Carcasa,
              	CamaraTrasera:CamaraTrasera,
              	CamaraDelantera:CamaraDelantera,
              	PinCarga:PinCarga,
              	Auriculares:Auriculares,
              	ParlanteFrontal:ParlanteFrontal,
              	ParlanteTrasero:ParlanteTrasero,
              	SensorProx:SensorProx,
              	Bateria:Bateria,
              	BateriaPorcentaje:BateriaPorcentaje,
              	Wifi:Wifi,
              	Bluetooth:Bluetooth,
              	Vidrio:Vidrio,
              	Modulo:Modulo,
              	Traslucido:Traslucido,
              	Otros:Otros,
              	Estado:Estado,
              	Lugar:Lugar,
              	Liberar:Liberar,
              	PortaSim:PortaSim,
              	Microfono:Microfono,
              	Botones:Botones,
              	Tactil:Tactil,
              	version:version,

              	opcion:opcion
              },    
              success: function(data) {
                tablaRegistros.ajax.reload(null, false);
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
                
    //Agregar Registro Nuevo
    $("#btnAdd").click(function(){
        opcion = 1; //alta           
        user_id=null;
    	
    	$('#modalDIV').modal("show");
        $("#formUsuarios").trigger("reset");
		//$('#divID').hide();
    	$(".modal-title").text("Agregar Nuevo Registro");
        $('#modalCRUD').modal('show');	    
    });
    
	//Actualizar Tabla
	$("#btnUpdate").click(function(){
                tablaRegistros.ajax.reload(null, false);
              toastr["warning"]("La tabla se esta actualizando...", "<strong>Aguarde unos instantes</strong>");	

    });
	toastr.options = {
  "closeButton": false,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "7000",
  "extendedTimeOut": "5000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
    //Editar        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;//editar
    	$('#modalDIV').modal("show");
    	$('#divID').show();
        fila = $(this).closest("tr");	        
        user_id = parseInt(fila.find('td:eq(1)').text()); //capturo el ID		            
        Marca = fila.find('td:eq(3)').text();
        IMEI = fila.find('td:eq(2)').text();
        Modelo = fila.find('td:eq(4)').text();
        Fecha = fila.find('td:eq(5)').text();
        Estado = fila.find('td:eq(6)').text();
        Revisor = fila.find('td:eq(7)').text();
        GB = fila.find('td:eq(8)').text();
        Color = fila.find('td:eq(9)').text();
        Estetica = fila.find('td:eq(10)').text();
        Carcasa = fila.find('td:eq(11)').text();
        CamaraTrasera = fila.find('td:eq(12)').text();
        CamaraDelantera = fila.find('td:eq(13)').text();
        PinCarga = fila.find('td:eq(14)').text();
        Auriculares = fila.find('td:eq(15)').text();
        ParlanteFrontal = fila.find('td:eq(16)').text();
        ParlanteTrasero = fila.find('td:eq(17)').text();
        SensorProx = fila.find('td:eq(18)').text();
        Bateria = fila.find('td:eq(19)').text();
        BateriaPorcentaje = fila.find('td:eq(20)').text();
        Wifi = fila.find('td:eq(21)').text();
        Bluetooth = fila.find('td:eq(22)').text();
        Vidrio = fila.find('td:eq(23)').text();
        Modulo = fila.find('td:eq(24)').text();
        Traslucido = fila.find('td:eq(25)').text();
        Otros = fila.find('td:eq(26)').text();
        Lugar = fila.find('td:eq(27)').text();
        Liberar = fila.find('td:eq(28)').text();
        PortaSim = fila.find('td:eq(29)').text();
        Microfono = fila.find('td:eq(30)').text();
        Botones = fila.find('td:eq(31)').text();
        Tactil = fila.find('td:eq(32)').text();
        version = fila.find('td:eq(33)').text();
		version1 = parseInt(version) + 1;
        $("#ID").val(user_id);
		$("#Marca").val(Marca);
        $("#IMEI").val(IMEI);
        $("#Modelo").val(Modelo);
        //$("#Fecha").val(Fecha);
        $("#Estado").val(Estado);
        $("#Revisor").val(Revisor);
        $("#GB").val(GB);
        $("#Color").val(Color);
        $("#Estetica").val(Estetica);
        $("#Carcasa").val(Carcasa);
        $("#CamaraTrasera").val(CamaraTrasera);
        $("#CamaraDelantera").val(CamaraDelantera);
        $("#PinCarga").val(PinCarga);
        $("#Auriculares").val(Auriculares);
        $("#ParlanteFrontal").val(ParlanteFrontal);
        $("#ParlanteTrasero").val(ParlanteTrasero);
        $("#SensorProx").val(SensorProx);
        $("#Bateria").val(Bateria);
        $("#BateriaPorcentaje").val(BateriaPorcentaje);
        $("#Wifi").val(Wifi);
        $("#Bluetooth").val(Bluetooth);
        $("#Vidrio").val(Vidrio);
        $("#Modulo").val(Modulo);
        $("#Traslucido").val(Traslucido);
        $("#Otros").val(Otros);
        $("#Lugar").val(Lugar);
        $("#Liberar").val(Liberar);
        $("#PortaSim").val(PortaSim);
        $("#Microfono").val(Microfono);
        $("#Botones").val(Botones);
        $("#Tactil").val(Tactil);
        $("#version").val(version1);

        $(".modal-title").text("Editar Registro");		
        $('#modalCRUD').modal('show');		   
    });

    //Vendido
	$(document).on("click", ".btnVendido", function(){		        
        opcion = 5;//Vendido
    	$('#modalDIV').hide();
    	$('#divID').show();

        fila = $(this).closest("tr");	        
        user_id = parseInt(fila.find('td:eq(1)').text()); //capturo el ID		            
        Marca = fila.find('td:eq(3)').text();
        IMEI = fila.find('td:eq(2)').text();
        Modelo = fila.find('td:eq(4)').text();
        Fecha = fila.find('td:eq(5)').text();
        Estado = fila.find('td:eq(6)').text();
        Revisor = fila.find('td:eq(7)').text();
        GB = fila.find('td:eq(8)').text();
        Color = fila.find('td:eq(9)').text();
        Estetica = fila.find('td:eq(10)').text();
        Carcasa = fila.find('td:eq(11)').text();
        CamaraTrasera = fila.find('td:eq(12)').text();
        CamaraDelantera = fila.find('td:eq(13)').text();
        PinCarga = fila.find('td:eq(14)').text();
        Auriculares = fila.find('td:eq(15)').text();
        ParlanteFrontal = fila.find('td:eq(16)').text();
        ParlanteTrasero = fila.find('td:eq(17)').text();
        SensorProx = fila.find('td:eq(18)').text();
        Bateria = fila.find('td:eq(19)').text();
        BateriaPorcentaje = fila.find('td:eq(20)').text();
        Wifi = fila.find('td:eq(21)').text();
        Bluetooth = fila.find('td:eq(22)').text();
        Vidrio = fila.find('td:eq(23)').text();
        Modulo = fila.find('td:eq(24)').text();
        Traslucido = fila.find('td:eq(25)').text();
        Otros = fila.find('td:eq(26)').text();
        Lugar = fila.find('td:eq(27)').text();
        Liberar = fila.find('td:eq(28)').text();
        PortaSim = fila.find('td:eq(29)').text();
        Microfono = fila.find('td:eq(30)').text();
        Botones = fila.find('td:eq(31)').text();
        Tactil = fila.find('td:eq(32)').text();
        version = fila.find('td:eq(33)').text();
		version1 = parseInt(version) + 1;

        $("#ID").val(user_id);
		$("#Marca").val(Marca);
        $("#IMEI").val(IMEI);
        $("#Modelo").val(Modelo);
        //$("#Fecha").val(Fecha);
        $("#Estado").val(Estado);
        $("#Revisor").val(Revisor);
        $("#GB").val(GB);
        $("#Color").val(Color);
        $("#Estetica").val(Estetica);
        $("#Carcasa").val(Carcasa);
        $("#CamaraTrasera").val(CamaraTrasera);
        $("#CamaraDelantera").val(CamaraDelantera);
        $("#PinCarga").val(PinCarga);
        $("#Auriculares").val(Auriculares);
        $("#ParlanteFrontal").val(ParlanteFrontal);
        $("#ParlanteTrasero").val(ParlanteTrasero);
        $("#SensorProx").val(SensorProx);
        $("#Bateria").val(Bateria);
        $("#BateriaPorcentaje").val(BateriaPorcentaje);
        $("#Wifi").val(Wifi);
        $("#Bluetooth").val(Bluetooth);
        $("#Vidrio").val(Vidrio);
        $("#Modulo").val(Modulo);
        $("#Traslucido").val(Traslucido);
        $("#Otros").val(Otros);
        $("#Lugar").val(Lugar);
        $("#Liberar").val(Liberar);
        $("#PortaSim").val(PortaSim);
        $("#Microfono").val(Microfono);
        $("#Botones").val(Botones);
        $("#Tactil").val(Tactil);
        $("#version").val(version1);

        $(".modal-title").text("Marcar telefono como vendido?");		
        $('#modalCRUD').modal('show');		   
    });

    //Borrar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);  
    	user_id = parseInt($(this).closest('tr').find('td:eq(2)').text()) ;		
 		Marca = fila.find('td:eq(3)').text();
        IMEI = parseInt($(this).closest('tr').find('td:eq(2)').text()) ;	
        Modelo = fila.find('td:eq(4)').text();
        version = fila.find('td:eq(33)').text();

    	opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro con IMEI= "+IMEI+"?");                
        if (respuesta) {            
            $.ajax({
              url: "http://localhost/ciclatAppWebManager/html/conexionmysql/ajaxRegistros/db/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion,IMEI:IMEI},    
              success: function() {
                  tablaRegistros.row(fila.parents('tr')).remove().draw();
              toastr["error"]("El Registro se elimino correctamente", "<strong>Datos Eliminados</strong>");	
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
        
        		}
    
     		});
         
	
});    