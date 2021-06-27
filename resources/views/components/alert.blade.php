@if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger mt-3" role="alert">
        {{\Illuminate\Support\Facades\Session::get('error')}}
    </div>
@elseif(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{\Illuminate\Support\Facades\Session::get('success')}}
    </div>
@elseif(\Illuminate\Support\Facades\Session::has('message'))
    <div class="alert alert-primary mt-3" role="alert">
        {{\Illuminate\Support\Facades\Session::get('message')}}
    </div>
@endif