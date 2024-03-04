<div>
    <h1>Organization Registration</h1>
    <br>
    <br>
    <form action="{{url('org_register')}}" method="POST">
        @if(Session::get('Success'))
        <p style="color:green"> {{Session::get('Success')}} </p>
        @endif

        @if(Session::get('Error'))
        <p style="color:red"> {{Session::get('Error')}} </p>
        @endif
        
        @csrf
        <div class="form-group">
            <label for="">Organization Name</label>
            <input type="text" class="form-control" id="" name="org_name" placeholder="Ogr. Name">
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
            <label for="">Redirect to Org list</label>
            <input type="Radio" class="form-control" id="org_registered_list" name="org_registered_list" placeholder="password" value="1">
            <label for="">Redirect Same Page</label>
            <input type="Radio" class="form-control" id="org_registered_list" name="org_registered_list" placeholder="password" value="0">
        </div>
        <div class="form-group">
            <!-- <input type="submit" class="btn btn-primary" value="Submit"> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>