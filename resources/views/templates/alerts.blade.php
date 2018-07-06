@if($errors->all())
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Error!</h4>
        <p>Please fill all the required fields</p>
        <hr>
    @foreach($errors->all() as $error)
            <p class="mb-0">{{$error}}</p>
        
    @endforeach
    </div>
@endif


@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif