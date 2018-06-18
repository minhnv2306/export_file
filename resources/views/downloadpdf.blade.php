<style type="text/css">
	table td, table th{
		border:1px solid black;
	}
</style>
<div class="container">
	<h1> User Data </h1>
	<table>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Description</th>
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