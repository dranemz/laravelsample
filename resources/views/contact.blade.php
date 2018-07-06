@extends('templates.app')

@section('content')
<div class="row" style="padding:10px;">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
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
                <form action="{{URL::to('/submit')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="password" class="form-control" id="message" name="message" placeholder="Enter message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection