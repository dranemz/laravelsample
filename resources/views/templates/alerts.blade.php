@if($errors->all())
    <div id="alert" class="alert alert-danger" role="alert">
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


@if(session('success') || $errors->all())
    <script>
        window.location.hash = '#contact';
    </script>
@endif