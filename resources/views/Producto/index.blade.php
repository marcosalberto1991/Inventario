@extends('layouts.app_admin_ui')
@section("content")
<title>Lista de Producto</title>
<script type='text/javascript'>
	<?php echo "const  Foraproveedor_id= $proveedor_id;"; ?>
</script>
<style>
	.table.dataTable {
		clear: both;
		margin-top: .75rem !important;
		margin-bottom: .75rem !important;
		max-width: none !important;
		border-collapse: separate !important;
		border-spacing: 0;
	}

	div.container {
		max-width: 1200px
	}

	.table.dataTable.dataTable_width_auto {
		width: auto;
	}

	.table {
		width: 100%;
		margin-bottom: 1rem;
		background-color: rgba(0, 0, 0, 0);
	}
</style>


<div class=" row ">



<!--
<div class="col-lg-12  ">

<div class="card-body">  
    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">







                        </div>
                     
		                    </div><div class="row"><div class="col-sm-12">
                            	<table id="myTables" style="width: 100%;"  class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                                <thead>
                                <tr role="row">

                                	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 254.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>

                                	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 254.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 254.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 254.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 254.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 254.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>



                                	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 388.2px;" aria-label="Position: activate to sort column ascending">Position</th>
                                	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 188.2px;" aria-label="Office: activate to sort column ascending">Office</th>
                                	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 108.2px;" aria-label="Age: activate to sort column ascending">Age</th>
                                	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 195.2px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                                	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 151.2px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                </thead>
                                <tbody>
                                
                                
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr></tbody>
                                <tfoot>
                                
                                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table>

                        </div></div>

                       </div>
                        </div>
                        

                        </div>






-->




	<div class="col-lg-12  ">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<h5 class="card-title">Lista de producto
				@can('Producto Add')
				<button id="massadd-modal" class="btn btn-success mass-add-modal massmodal massadd " data-toggle="modal" data-target=".bd-example-modal-lg">
					Añadir un Producto </button>
				@endcan
				</h5>
				<div class=""> 
					<table id="myTable" style="swidth: s100%;"  class="table table-hover table-striped table-bordered dataTable dtr-inline compact nowrap" role="grid" aria-describedby="example_info">
						<thead style="width: 100%;">
							<tr style="width: 100%;">
								<th>id</th>
								<th>nombre_proveedor</th>
								<th>nombre</th>
								<th>imagen</th>
								<!--
								<th>precio_caja</th>
								<th>cantidad_caja</th>
								<th>precio_unidad</th>
								<th>iva</th>
								<th>porcentaje_ganacia</th>
							-->
								<th>precio_venta</th>
								<!--
								<th>ganacia</th>
								-->
								<th>proveedor_id</th>
								<th>Ultima Modificacion</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>
							@foreach($listmysql as $lists)

							<tr id="item_{{$lists->id}}">
								<th scope="row">{{ $lists->id }}</th>
								<td>{{ $lists->nombre_proveedor }}</td>
								<td>{{ $lists->nombre }}</td>
								<td>
									<a href="{{ asset('perfil_usuario/'.$lists->imagen) }}" target="_blank">
										<img height="40px" src="{{ asset('perfil_usuario/'.$lists->imagen) }}"
											width="40px"/>
										
									</a>
								</td>
								<!--
								<td>{{ $lists->precio_caja }}</td>
								<td>{{ $lists->cantidad_caja }}</td>
								<td>{{ $lists->precio_unidad }}</td>
								<td>{{ $lists->iva }}</td>
								<td>{{ $lists->porcentaje_ganacia }}</td>
								-->
								<td>{{ $lists->precio_venta }}</td>
								<!--
								<td>{{ $lists->ganacia }}</td>
								<-->
								<td>
									<script type="text/javascript">
										resulmunicipios_id=Foraproveedor_id.find( cas => cas.id == {{ $lists->proveedor_id }} );
									document.write(resulmunicipios_id.nombre); 
									</script>
								</td>
								<td>
									{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lists->updated_at)->diffForHumans() }}
								</td>
								<td>
									@can('Producto Show')
									<button class="massshow-modal btn btn-success btn-xs" data-id="{{ $lists->id}}"
										data-nombre_proveedor="{{ $lists->nombre_proveedor}}"
										data-nombre="{{ $lists->nombre}}" data-imagen="{{ $lists->imagen}}"
										data-precio_caja="{{ $lists->precio_caja}}"
										data-cantidad_caja="{{ $lists->cantidad_caja}}"
										data-precio_unidad="{{ $lists->precio_unidad}}" data-iva="{{ $lists->iva}}"
										data-porcentaje_ganacia="{{ $lists->porcentaje_ganacia}}"
										data-precio_venta="{{ $lists->precio_venta}}"
										data-ganacia="{{ $lists->ganacia}}"
										data-proveedor_id="{{ $lists->proveedor_id}}">
										<span class="glyphicon glyphicon-eye-open"></span> Ver</button>
									@endcan
									@can('Producto Editar')
									<button class="edit-modal btn btn-info btn-xs" data-id="{{ $lists->id}}"
										data-nombre_proveedor="{{ $lists->nombre_proveedor}}"
										data-nombre="{{ $lists->nombre}}" data-imagen="{{ $lists->imagen}}"
										data-precio_caja="{{ $lists->precio_caja}}"
										data-cantidad_caja="{{ $lists->cantidad_caja}}"
										data-precio_unidad="{{ $lists->precio_unidad}}" data-iva="{{ $lists->iva}}"
										data-porcentaje_ganacia="{{ $lists->porcentaje_ganacia}}"
										data-precio_venta="{{ $lists->precio_venta}}"
										data-ganacia="{{ $lists->ganacia}}"
										data-proveedor_id="{{ $lists->proveedor_id}}"><span
											class="glyphicon glyphicon-edit"></span>
										Editar</button>
									@endcan
									@can('Producto Eliminar')

									<button class="massdelete-modal btn btn-danger btn-xs" data-id="{{ $lists->id}}"
										data-nombre_proveedor="{{ $lists->nombre_proveedor}}"
										data-nombre="{{ $lists->nombre}}" data-imagen="{{ $lists->imagen}}"
										data-precio_caja="{{ $lists->precio_caja}}"
										data-cantidad_caja="{{ $lists->cantidad_caja}}"
										data-precio_unidad="{{ $lists->precio_unidad}}" data-iva="{{ $lists->iva}}"
										data-porcentaje_ganacia="{{ $lists->porcentaje_ganacia}}"
										data-precio_venta="{{ $lists->precio_venta}}"
										data-ganacia="{{ $lists->ganacia}}"
										data-proveedor_id="{{ $lists->proveedor_id}}"><span
											class="glyphicon glyphicon-trash"></span>Eliminar</button>

									@endcan

								</td>
							</tr>
							@endforeach
						</tbody>

					</table>

					<!--
					compact nowrap table-bordered table-hover mb-0 dt-responsive nowrap  compact nowrap
				-->

				</div>
			</div>
		</div>
	</div>
</div>
-->














@endsection


<div id="massModal" class="modal fade bd-example-modal-lg" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-descripcion"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h3 class="text-center" id="msdelete">¿Seguro que quieres borrar los datos?</h3>
				<form class="form-horizontal" id="formmass" role="form">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">

							<div class="form-group">
								<label class="control-label " for="id">ID:</label>
								<input type="text" class="form-control" id="id_mass" name="id" disabled>

							</div>



							<div class='form-group' id='nombre_proveedor'>
								<label class='control-label ' for='descripcion'>nombre de producto del
									proveedor:</label>
								<input type='text' name='nombre_proveedor' class='form-control'
									id='nombre_proveedor_mass' maxlength='45' required='required' autofocus>
								<p class='errornombre_proveedor text-center alert alert-danger d-none'>
									favor llena</p>
							</div>

							<div class='form-group' id='nombre'>
								<label class='control-label ' for='descripcion'>nombre:</label>
								<input type='text' name='nombre' class='form-control' id='nombre_mass' maxlength='45'
									required='required' autofocus>
								<p class='errornombre text-center alert alert-danger d-none'></p>
							</div>
							<div class='form-group' id='archivo'>
								<label class='control-label col-sm-2' for='descripcion'>Vista previa:</label>
								<img height="150px" width="150px" id="Imagene_modal" src=""
									style="margin-left: 15px;" />
							</div>
							<div class='form-group' id='imagen'>
								<label class='control-label ' for='descripcion'>imagen:</label>
								<input type='file' name='imagen' class='form-control' id='imagen_mass' maxlength='45'
									required='required' autofocus>
								<p class='errorimagen text-center alert alert-danger d-none'></p>
							</div>
							<!--
							<div class='form-group' id='precio_caja'>
								<label class='control-label ' for='descripcion'>precio_caja:</label>
								<input type='text' name='precio_caja' class='form-control calculo' id='precio_caja_mass'
									maxlength='11' required='required' autofocus>
								<p class='errorprecio_caja text-center alert alert-danger d-none'></p>
							</div>
							<div class='form-group' id='cantidad_caja'>
								<label class='control-label ' for='descripcion'>cantidad_caja:</label>
								<input type='text' name='cantidad_caja' class='form-control calculo'
									id='cantidad_caja_mass' maxlength='11' required='required' autofocus>
								<p class='errorcantidad_caja text-center alert alert-danger d-none'></p>
							</div>
							-->
						</div>
						<div class="col-md-6">
						<!--
							<div class='form-group' id='precio_unidad'>
								<label class='control-label ' for='descripcion'>precio_unidad:</label>
								<input type='text' name='precio_unidad' class='form-control calculo'
									id='precio_unidad_mass' maxlength='11' required='required' autofocus>
								<p class='errorprecio_unidad text-center alert alert-danger d-none'></p>
							</div>
							<div class='form-group' id='iva'>
								<label class='control-label ' for='descripcion'>iva:</label>
								<input type='text' name='iva' class='form-control calculo' id='iva_mass' maxlength='11'
									required='required' autofocus>
								<p class='erroriva text-center alert alert-danger d-none'></p>
							</div>
							<div class='form-group' id='porcentaje_ganacia'>
								<label class='control-label ' for='descripcion'>porcentaje_ganacia:</label>
								<input type='text' name='porcentaje_ganacia' class='form-control calculo'
									id='porcentaje_ganacia_mass' maxlength='11' required='required' autofocus>
								<p class='errorporcentaje_ganacia text-center alert alert-danger d-none'>
								</p>
							</div>
							-->
							<div class='form-group' id='precio_venta'>
								<label class='control-label ' for='descripcion'>precio_venta:</label>
								<input type='text' name='precio_venta' class='form-control ' id='precio_venta_mass'
									maxlength='11' required='required' autofocus>
								<p class='errorprecio_venta text-center alert alert-danger d-none'></p>
							</div>
							<!--	
							<div class='form-group' id='ganacia'>
								<label class='control-label ' for='descripcion'>ganacia:</label>
								<input type='text' name='ganacia' class='form-control ' id='ganacia_mass' maxlength='11'
									required='required' autofocus>
								<p class='errorganacia text-center alert alert-danger d-none'></p>
							</div>
							-->
							<div class="form-group">
								<label class="control-label " for="descripcion">proveedor_id:</label>

								<select name="proveedor_id" class="form-control" id="proveedor_id_mass"
									required="required" autofocus>
									<div class="">
										<option value=""></option>

										@foreach($proveedor_id as $lists)
										<option value="{{$lists->id}}">{{$lists->nombre}}</option>
										@endforeach

								</select>

								<p class="errorproveedor_id text-center alert alert-danger d-none">
									llenar los
									datos
								</p>
							</div>
						</div>

					</div>
			</div>

			</form>
			<div class="modal-footer">

				<button type="button" id="acciones" class="btn btn-primary mass">
					<span class="glyphicon glyphicon-check"></span> massar
				</button>
				<button type="button" class="btn btn-warning" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> Cerra
				</button>
			</div>
		</div>
	</div>
</div>
</div>



<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar el registro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">Se eliminar el registro de forma permanete
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerra</button>
				<button type="button" class="btn btn-danger delete" data-dismiss="modal">Eliminar</button>
			</div>
		</div>
	</div>
</div>

@section("page-js-files")

@stop
@section("page-js-script")


<script type='text/javascript'>
</script>

<script type='text/javascript'>
	function obtener_data(data) {
	$('#id_mass').val(data.data('id'));
	$('#nombre_proveedor_mass').val(data.data('nombre_proveedor'));
	$('#nombre_mass').val(data.data('nombre'));
	//////$('#imagen_mass').val(data.data('imagen'));
	$('#precio_caja_mass').val(data.data('precio_caja'));
	$('#cantidad_caja_mass').val(data.data('cantidad_caja'));
	$('#precio_unidad_mass').val(data.data('precio_unidad'));
	$('#iva_mass').val(data.data('iva'));
	$('#porcentaje_ganacia_mass').val(data.data('porcentaje_ganacia'));
	$('#precio_venta_mass').val(data.data('precio_venta'));
	$('#ganacia_mass').val(data.data('ganacia'));
	$('#proveedor_id_mass').val(data.data('proveedor_id'));

	var url='{{ asset("perfil_usuario/") }}';
	$("#Imagene_modal").attr("src", url+'/'+data.data('imagen'));
	
}
//Añadir un registro
$(document).on('click', '.massadd', function() {
	$("#formmass")[0].reset();
	$('.modal-descripcion').text('Añadir un nuevo registro');
	$('#msdelete').text(' ');
	//alert('lcomoesta ');
	$('#acciones').text('Añadir Nuevos ');
	$('#acciones').attr('class', 'btn btn-success add');
	//$('#formmass').attr('id', 'form_add');
	$('#massModal').modal('show');
});
// Vista de un registro
$(document).on('click', '.massshow-modal', function() {
	obtener_data($(this));					
	$('.modal-descripcion').text('Vista de los Datos');
	$('#msdelete').text(' ');
	$('#massModal').modal('show');
	$('#acciones').attr('class', 'btn btn-info hibe');
	$('#acciones').text('Visible');
	$('#acciones').attr('disabled');
});
// Editar un registro
$(document).on('click', '.edit-modal', function() {	
	obtener_data($(this));
	id = $('#id_mass').val();
	$('#acciones').attr('class', 'btn btn-warning edit');
	$('#acciones').text('Editar');
	$('.modal-descripcion').text('Editar un Dato');
	$('#massModal').modal('show');
	$('#msdelete').text(' ');
});
// Eliminar un registro
$(document).on('click', '.massdelete-modal', function() {
	$('#id_mass').val($(this).data('id'));
	id = $('#id_mass').val();           
	$('#DeleteModal').modal('show');
});
//enviar registro para eiminar
$('.modal-footer').on('click', '.delete', function() {
	$.ajax({
		type: 'DELETE',
		url: 'Producto/'+id,
		data: {
		'_token': $('input[name=_token]').val(),
		},
		success: function(data) {
			toastr.success('Dato Eliminado!', 'Operacion Exitosa', {timeOut: 5000});
			$('#item_' + data['id']).remove();
				
		}
	});
});
		
//enviar registro para añadir
$('.modal-footer').on('click', '.add', function() {
	var formData = new FormData($('#formmass')[0]);
	$.ajax({
		type: 'POST',
		url: 'Producto',
		//data: $('#formmass').serialize(),
		data: formData,
    	cache: false,
    	contentType: false,
    	processData: false,
		//data: {
		error: function(jqXHR, text, error){
        	toastr.error('Error de operación!', 'No se pudo Añadir los datos<br>', {timeOut: 5000});
        },
		success: function(data) {
			 
			if ((data.errors)) {
				verificar(data);
				//$('#massModal').modal('show');
            	toastr.error('Formato Inválido!', 'En la verificación de datos <br>', {timeOut: 5000});	
			} else {
				toastr.success('Operación Exitosa!', 'Datos Guardados', {timeOut: 5000});
				operaciones(data,'add');
				$("#formmass")[0].reset();
			}
		},
	});
});
						
//add
//enviar registro para editar
$('.modal-footer').on('click', '.edit', function() {
	
	var formData = new FormData($('#formmass')[0]);
	$.ajax({
		type: 'POST',
		//type: 'PUT',
		url: 'Producto/update/' + id,
		//data: $('#formmass').serialize(), 
		data: formData,
    	cache: false,
    	contentType: false,
    	processData: false,
		error: function(jqXHR, text, error){
            toastr.error('Error de operación!', 'No se pudo Añadir los datos<br>'+error, {timeOut: 5000});	
        },
		success: function(data) {
			if(data.errors){
				verificar(data);
            	toastr.error('Formato Inválido!', 'Formato invalido en el formulario <br>', {timeOut: 5000});	
				//$('#massModal').modal('show');
			} else {
               	toastr.success('Modificación Exitosa Producto!', 'Datos Modificados', {timeOut: 5000});
                operaciones(data,'edit');
			
            }
        }
    });
});
$(document).on('change', '.calculo', function() {
	var precio_caja =$('#precio_caja_mass').val()
	var cantidad_caja =$('#cantidad_caja_mass').val()
	var  precio_unidad =precio_caja / cantidad_caja;
	$('#precio_unidad_mass').val(precio_unidad);
	var iva =$('#iva_mass').val()
	var porcentaje_ganacia =$('#porcentaje_ganacia_mass').val()
	
		iva=(iva/100)
	if (iva>0) {
	}else{
		//iva=0
	}
		porcentaje_ganacia=(porcentaje_ganacia/100)
	if (porcentaje_ganacia>0) {
	}else{
		//porcentaje_ganacia=0
	}
	var precio_venta = (iva + porcentaje_ganacia+1)*precio_unidad 
	$('#precio_venta_mass').val(precio_venta);
	$('#ganacia_mass').val(precio_venta-precio_unidad);
});
</script>


<script type="text/javascript">
	function verificar(data) {
	$('.errorid').addClass('d-none');
	$('.errornombre_proveedor').addClass('d-none');
	$('.errornombre').addClass('d-none');
	$('.errorimagen').addClass('d-none');
	$('.errorprecio_caja').addClass('d-none');
	$('.errorcantidad_caja').addClass('d-none');
	$('.errorprecio_unidad').addClass('d-none');
	$('.erroriva').addClass('d-none');
	$('.errorporcentaje_ganacia').addClass('d-none');
	$('.errorprecio_venta').addClass('d-none');
	$('.errorganacia').addClass('d-none');
	$('.errorproveedor_id').addClass('d-none');
	if (data.errors.id) {
    	$(".errorid").removeClass("d-none");
    	$(".errorid").text(data.errors.id);
    }
    
	if (data.errors.nombre_proveedor) {
    	$(".errornombre_proveedor").removeClass("d-none");
    	$(".errornombre_proveedor").text(data.errors.nombre_proveedor);
    }
    
	if (data.errors.nombre) {
    	$(".errornombre").removeClass("d-none");
    	$(".errornombre").text(data.errors.nombre);
    }
    
	if (data.errors.imagen) {
    	$(".errorimagen").removeClass("d-none");
    	$(".errorimagen").text(data.errors.imagen);
    }
    
	if (data.errors.precio_caja) {
    	$(".errorprecio_caja").removeClass("d-none");
    	$(".errorprecio_caja").text(data.errors.precio_caja);
    }
    
	if (data.errors.cantidad_caja) {
    	$(".errorcantidad_caja").removeClass("d-none");
    	$(".errorcantidad_caja").text(data.errors.cantidad_caja);
    }
    
	if (data.errors.precio_unidad) {
    	$(".errorprecio_unidad").removeClass("d-none");
    	$(".errorprecio_unidad").text(data.errors.precio_unidad);
    }
    
	if (data.errors.iva) {
    	$(".erroriva").removeClass("d-none");
    	$(".erroriva").text(data.errors.iva);
    }
    
	if (data.errors.porcentaje_ganacia) {
    	$(".errorporcentaje_ganacia").removeClass("d-none");
    	$(".errorporcentaje_ganacia").text(data.errors.porcentaje_ganacia);
    }
    
	if (data.errors.precio_venta) {
    	$(".errorprecio_venta").removeClass("d-none");
    	$(".errorprecio_venta").text(data.errors.precio_venta);
    }
    
	if (data.errors.ganacia) {
    	$(".errorganacia").removeClass("d-none");
    	$(".errorganacia").text(data.errors.ganacia);
    }
    
	if (data.errors.proveedor_id) {
    	$(".errorproveedor_id").removeClass("d-none");
    	$(".errorproveedor_id").text(data.errors.proveedor_id);
    }
    
}
</script>



<script type='text/javascript'>
	function operaciones(data,operacion) {
	const resulproveedor_id=Foraproveedor_id.find( cas => cas.id == data.proveedor_id ); 
		
	var url='{{ asset("perfil_usuario/") }}';
	var tabla=
		"<tr  id='item_"+data.id+"'  class='item"+data.id+"'>"+
		"<td class='col1'>" + data.id + "</td>"+
		"<td>"+ data.nombre_proveedor+"</td>"+
		"<td>"+ data.nombre+"</td>"+
		"<td>"+
			'<a href="'+url+'/'+data.imagen+'" target="_blank">'+
        		'<img height="40px" src="'+url+'/'+data.imagen+'" width="40px">'+
            	'</img>'+
        	'</a>'+
		"</td>"+
		//"<td>"+ data.precio_caja+"</td>"+
		//"<td>"+ data.cantidad_caja+"</td>"+
		//"<td>"+ data.precio_unidad+"</td>"+
		//"<td>"+ data.iva+"</td>"+
		//"<td>"+ data.porcentaje_ganacia+"</td>"+
		"<td>"+ data.precio_venta+"</td>"+
		
		//"<td>"+ data.ganacia+"</td>"+
		"<td>"+ resulproveedor_id["nombre"]  +"</td>"+
		
		'<td>Ahora</td><td>'+					
	@can('Producto Show') 
		' <button class="massshow-modal btn btn-success"  ' + 
		"data-id='"+ data.id+"'"+
		"data-nombre_proveedor='"+ data.nombre_proveedor+"'"+
		"data-nombre='"+ data.nombre+"'"+
		"data-imagen='"+ data.imagen+"'"+
		"data-precio_caja='"+ data.precio_caja+"'"+
		"data-cantidad_caja='"+ data.cantidad_caja+"'"+
		"data-precio_unidad='"+ data.precio_unidad+"'"+
		"data-iva='"+ data.iva+"'"+
		"data-porcentaje_ganacia='"+ data.porcentaje_ganacia+"'"+
		"data-precio_venta='"+ data.precio_venta+"'"+
		"data-ganacia='"+ data.ganacia+"'"+
		"data-proveedor_id='"+ data.proveedor_id+"'"+
		 
		"'><span class='glyphicon glyphicon-eye-open'></span> Ver</button>  "+ 
	@endcan			
	
	@can('Producto Editar')
		" <button class='edit-modal btn btn-info' "+
		"data-id='"+ data.id+"'"+
		"data-nombre_proveedor='"+ data.nombre_proveedor+"'"+
		"data-nombre='"+ data.nombre+"'"+
		"data-imagen='"+ data.imagen+"'"+
		"data-precio_caja='"+ data.precio_caja+"'"+
		"data-cantidad_caja='"+ data.cantidad_caja+"'"+
		"data-precio_unidad='"+ data.precio_unidad+"'"+
		"data-iva='"+ data.iva+"'"+
		"data-porcentaje_ganacia='"+ data.porcentaje_ganacia+"'"+
		"data-precio_venta='"+ data.precio_venta+"'"+
		"data-ganacia='"+ data.ganacia+"'"+
		"data-proveedor_id='"+ data.proveedor_id+"'"+
		 
		"'><span class='glyphicon glyphicon-edit'></span> Editar</button>  "+ 
	@endcan
	@can('Producto Eliminar') 
		"<button class='massdelete-modal btn btn-danger'  " +
		"data-id='"+ data.id+"'"+
		"data-nombre_proveedor='"+ data.nombre_proveedor+"'"+
		"data-nombre='"+ data.nombre+"'"+
		"data-imagen='"+ data.imagen+"'"+
		"data-precio_caja='"+ data.precio_caja+"'"+
		"data-cantidad_caja='"+ data.cantidad_caja+"'"+
		"data-precio_unidad='"+ data.precio_unidad+"'"+
		"data-iva='"+ data.iva+"'"+
		"data-porcentaje_ganacia='"+ data.porcentaje_ganacia+"'"+
		"data-precio_venta='"+ data.precio_venta+"'"+
		"data-ganacia='"+ data.ganacia+"'"+
		"data-proveedor_id='"+ data.proveedor_id+"'"+
		 
		"'><span class='glyphicon glyphicon-trash'></span> Eliminar</button>  "+
	@endcan
	" </td></tr>";
	if('edit'==operacion){		
		$('#item_'+data.id).replaceWith(tabla);
	}
	if('add'==operacion){
		$('#myTable').append(tabla);
	}
} 
</script>
@stop
</body>

</html>