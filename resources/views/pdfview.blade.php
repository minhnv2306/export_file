<style type="text/css">
	table td, table th{
		border:1px solid black;
	}
</style>
<div class="container">

	<h1>Hehe</h1>
	<br/>
	<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>


	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Password</th>
		</tr>
		@foreach ($items as $key => $item)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $item->email }}</td>
			<td>{{ $item->password }}</td>
		</tr>
		@endforeach
	</table>
</div>