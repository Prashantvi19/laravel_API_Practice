<form action="{{url('users_register')}}" method="POST">
    <legend>Registration</legend><br>
    @if(Session::get('Success'))
    <p style="color:green"> {{Session::get('Success')}} </p>
    @endif

    @if(Session::get('Error'))
    <p style="color:red"> {{Session::get('Error')}} </p>
    @endif

    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="name" placeholder="name">
    </div>
    <div class="form-group">
        <label for="">E-mail</label>
        <input type="email" class="form-control" id="" name="email" placeholder="email">
    </div>
    <div class="form-group">
        <label for="">Contact</label>
        <input type="number" class="form-control" id="" name="contact" placeholder="contact">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="" name="password" placeholder="password">
    </div>
    <div class="form-group">
        <!-- <input type="submit" class="btn btn-primary" value="Submit"> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>