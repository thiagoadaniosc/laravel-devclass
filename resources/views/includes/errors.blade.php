@if ($errors->any())
    <div class="alert alert-danger col-lg-5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif