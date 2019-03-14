@extends('layouts.app')
@section('content')


    <div class="row">

                @include('components.dashboard.chart-box')

    </div>

    {{--FORMS--}}

      {{--data-toggle="validator"--}}

      {{--FOR BOOTSTRAP VALIDATION ADD data-toggle="validator" TO <form></form>--}}

@include('components.radio')

@endsection

@section('js')

    <script>

        $(".counter").counterUp({
            delay: 100,
            time: 1000
        });
    </script>
@endsection