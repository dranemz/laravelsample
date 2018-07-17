<div id="contact" class="container">
    <h2 class="display-4 font-weight-bold">CONTACT</h2>
    <hr/>
    <div class="row" style="padding:10px;min-height:60vh;">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-body">
                    @include('templates.alerts')
                    <form action="{{URL::to('/submit')}}" method="post">
                    @csrf
                    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="password" rows="5" class="form-control" id="message" name="message" placeholder="Enter message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>