<div class="form-group">
	<label for="name" class="control-label">Nombre</label>
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<label for="price" class="control-label">Precio</label>
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-6">
			<label for="codigo" class="control-label">Código</label>
			{!! Form::text('codigo', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	<div class="radio-inline">
		<label>{!! Form::radio('currency', 'S') !!} Soles</label>
	</div>
	<div class="radio-inline">
		<label>{!! Form::radio('currency', 'D') !!} Dolares</label>
	</div>
</div>
<hr>
@if(Route::currentRouteName() !== 'productShow')
<div class="form-group">
	{!! Form::file('default_img', ['class' => 'form-control']) !!}
</div>
@endif
<div class="form-group">
	<label for="short_info" class="control-label">Descripción Breve</label>
	{!! Form::textarea('short_info', null, ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group">
	<label for="description" class="control-label">Descripción</label>
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<hr>
<div class="form-group">
	<button class="btn btn-primary">Guardar</button>
</div>