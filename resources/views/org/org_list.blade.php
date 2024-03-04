<div class="container-fluid">
<h1>Org Registers List</h1>
<table border="1">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Password</th>
		<th>Created Date</th>
	</thead>
	<tbody>
		@foreach($data as $key=>$val)
		<tr>
			<td>{{$val['org_name']}}</td>
			<td>{{$val['email']}}</td>
			<td>{{$val['contact']}}</td>
			<td>{{$val['password']}}</td>
			<td>{{$val['created_at']}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$data ->links('pagination::bootstrap-5')}}</div>