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

    <script type="text/javascript">
        setTimeout(function () {
            $('.alert-success').hide();
        },5000)
    </script>