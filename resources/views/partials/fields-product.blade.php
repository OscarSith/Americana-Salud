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
	<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor-description">
		<div class="btn-group">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
				title="Font"><i class="fa fa-font"></i><b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			</ul>
		</div>
		<div class="btn-group">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
				title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b
				class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a data-edit="fontSize 5"><font size="5">Grande</font></a></li>
				<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
				<li><a data-edit="fontSize 1"><font size="1">Pequeño</font></a></li>
			</ul>
		</div>
		<div class="btn-group">
			<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Color">
				<i class="fa fa-paint-brush"></i>&nbsp;<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			    <li><a data-edit="foreColor #000000" title="Usar color Negro" data-placement="left"><i class="fa fa-square"></i> Negro</a></li>
			    <li><a data-edit="foreColor #999999" title="Usar color Gris" data-placement="left"><i class="fa fa-square text-muted"></i> Gris</a></li>
			    <li><a data-edit="foreColor #ff0000" title="Usar color Rojo" data-placement="left"><i class="fa fa-square text-danger"></i> Rojo</a></li>
			    <li><a data-edit="foreColor #5E7A44" title="Usar color Verde" data-placement="left"><i class="fa fa-square text-success"></i> Verde</a></li>
			    <li><a data-edit="foreColor #286090" title="Usar color Azul" data-placement="left"><i class="fa fa-square text-primary"></i> Azul</a></li>
			</ul>
		</div>
		<div class="btn-group">
			<a class="btn btn-default" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
			<a class="btn btn-default" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
			<a class="btn btn-default" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
			<a class="btn btn-default" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
		</div>
		<div class="btn-group">
			<a class="btn btn-default" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
			<a class="btn btn-default" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
			<a class="btn btn-default" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-outdent"></i></a>
			<a class="btn btn-default" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
		</div>
		<div class="btn-group">
			<a class="btn btn-default" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
			<a class="btn btn-default" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
			<a class="btn btn-default" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
			<a class="btn btn-default" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
		</div>
		<div class="btn-group">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
			<div class="dropdown-menu input-append">
				<input class="form-control" placeholder="URL" type="text" data-edit="createLink" />
				<button class="btn btn-default" type="button">Agregar</button>
			</div>
			<a class="btn btn-default" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-unlink"></i></a>
		</div>
		<div class="btn-group">
			<a class="btn btn-default" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
			<a class="btn btn-default" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
		</div>
	</div>
	<div id="editor-description" class="lead">{!! isset($empresa) ? $empresa->description : '' !!}</div>
	<input type="hidden" name="description" id="description">
</div>
<hr>
<div class="form-group">
	<a href="{{ route('admin') }}" class="btn btn-default"><i class="fa fa-arrow-left fa-fw"></i>Atrás</a>
	<button class="btn btn-primary">Guardar</button>
</div>