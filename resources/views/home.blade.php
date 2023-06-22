@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Информация') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Вы авторизированы!') }}
                        <script>
                            // your "Imaginary javascript"

                            // or
                            window.location.href = '{{route("index")}}'; //using a named route
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
