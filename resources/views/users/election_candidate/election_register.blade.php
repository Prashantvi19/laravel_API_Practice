<div>
    <h1>Organization Election Candidate Registration</h1>
    <br>
    <br>
    <br>
    <form action="{{url('org_candidate_register')}}" method="POST">
        @if(Session::get('Success'))
        <p style="color:green"> {{Session::get('Success')}} </p>
        @endif

        @if(Session::get('Error'))
        <p style="color:red"> {{Session::get('Error')}} </p>
        @endif
        <br>
        <br>
        @csrf
        <div class="form-group">
            <label for="">Election Candidate Name</label>
            <input type="text" class="form-control" id="" name="candidate_name" placeholder="Election Candidate Name">
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
            <label for="">Post</label>
            <input type="text" class="form-control" id="" name="post" placeholder="Post">
        </div>
        <div class="form-group">
            <label for="">slogan</label>
            <input type="text" class="form-control" id="" name="slogan" placeholder="Slogan">
        </div>
        <div class="form-group">
            <label for="">Election Logo</label>
            <input type="file" class="form-control" id="" name="logo">
        </div>
        <div class="form-group">
            <label for="org_registered_candidates_list1">Redirect to Candidates list</label>
            <input type="Radio" class="form-control" id="org_registered_candidates_list1" name="org_registered_candidates_list" value="1">
            <label for="org_registered_candidates_list2">Redirect Same Page</label>
            <input type="Radio" class="form-control" id="org_registered_candidates_list2" name="org_registered_candidates_list" value="0">
        </div>
        <div class="form-group">
            <!-- <input type="submit" class="btn btn-primary" value="Submit"> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>S