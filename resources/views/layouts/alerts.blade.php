<div class="container">

    <div class="mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div>

    <div class="mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>