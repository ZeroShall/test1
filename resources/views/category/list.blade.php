<table border="1">
	<tr>
		<th>No.</th>
		<th>Name</th>
	</tr>
	@foreach($categories as $key => $item)
		<tr>
			<td>{{ $key + 1 }}</td>
			<td>{{ $item->title }}</td>
		</tr>
	@endforeach
</table>