<div style="background-color:#f1f1f1;border: 1px solid #ccc;width:90%;margin:10px auto 0;padding:10px">
	<table align="center" width="90%" cellpadding="5">
		<tr>
			<td colspan="5" style="text-align:center"><h2>Ha solicitado una orden:</h2></td>
		</tr>
		<tr>
			<td rowspan="8"><img src="{{ asset('img/products/' . session('product')->default_img) }}" alt=""></td>
		</tr>
		<tr>
			<td><strong>Nombre</strong></td>
			<td colspan="3">{{ $full_name }}</td>
		</tr>
		<tr>
			<td><strong>Telefonos</strong></td>
			<td colspan="3">{{ $telefono1 }} | {{ $telefono2 }}</td>
		</tr>
		<tr>
			<td><strong>Dirección</strong></td>
			<td colspan="3">{{ $direccion }}</td>
		</tr>
		<tr>
			<td><strong>Referencia</strong></td>
			<td colspan="3">{{ $referencia }}</td>
		</tr>
		<tr>
			<td><strong>Pais</strong></td>
			<td>{{ $pais }}</td>
			<td style="text-align:right"><strong>Ciudad</strong></td>
			<td>{{ $ciudad }}</td>
		</tr>
		<tr>
			<td><strong>Nombre Producto</strong></td>
			<td colspan="3">{{ session('product')->name }}</td>
		</tr>
		<tr>
			<td><strong>Cantidad</strong></td>
			<td>{{ session('quanty') }}</td>
			<td style="text-align:right"><strong>Codigo</strong></td>
			<td>{{ session('product')->codigo }}</td>
		</tr>
	</table>
</div>