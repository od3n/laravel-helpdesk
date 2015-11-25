@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@if (session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif

@if (session('success_logout'))
    <p class="alert alert-danger">{{ session('success_logout') }}</p>
@endif

@foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
@endforeach

