
<div class="container-fluid">
<h1>Organization Register Candidate </h1>
<table border="1">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Password</th>
        <th>Post</th>
        <th>Slogan</th>
        <th>Created Date</th>
    </thead>
    <tbody>
        @foreach($data as $key=>$val)
        <tr>
            <td>{{$val['name']}}</td>
            <td>{{$val['email']}}</td>
            <td>{{$val['contact']}}</td>
            <td>{{$val['password']}}</td>
            <td>{{$val['post']}}</td>
            <td>{{$val['slogan']}}</td>
            <td>{{$val['created_at']}}</td>
            <!-- `name`, `email`, `contact`, `password`, `post`, `created_at`, `updated_at`, `slogan`, `logo` -->
        </tr>
        @endforeach
    </tbody>
</table>
{{$data ->links('pagination::bootstrap-5')}}</div>