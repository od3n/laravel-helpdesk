@extends('master')        
@section('title', 'Home')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            @include('shared.notification')

            <h2 class="header">Home Page</h2>
            
            @if (Auth::check())
                <?php //echo 'This comment will not be present in the rendered HTML' ?>
                {{-- This comment will not be present in the rendered HTML --}}
                
                <?php echo $name ?> - <?php echo $age ?>
                <br />
                {{ $name }} - {{ $age }}
                <br />

                <?php if (10 > 2) {
                    echo 'true';
                } else {
                    echo 'false';
                } ?>
                <br />
                @if (10 > 2)
                    true
                @else
                    false
                @endif
                <br />

                <?php foreach (range(1,5) as $number) {
                    echo $number;
                    echo '<br />';
                } ?>

                @foreach (range(1,5) as $number)
                    {{ $number }}
                    <br />
                @endforeach
            @endif

        </div>
    </div>
@endsection