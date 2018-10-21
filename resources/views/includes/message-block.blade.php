<div class="row container-of-errors" style="display: none">
    <div class="col-md-12 error">
        <div class="alert alert-danger">
            <ul class="list-of-errors">
            </ul>
        </div>
    </div>
</div>

@if(Session::has('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif

@if(Session::has('error-message'))
    <div class="row list-of-all-errors">
        <div class="col-md-12 error">
            <div class="alert alert-danger errors">
                {{Session::get('error-message')}}
            </div>
        </div>
    </div>
@endif

@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-12 error">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<script type="text/javascript">
    setTimeout(function () {
        $('.alert-success').hide();
        $('.errors').hide();
    }, 3000);

</script>