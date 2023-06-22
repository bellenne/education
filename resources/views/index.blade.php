@extends('layouts.header')
@section('academic_subjects')
    @include("layouts.academic_subjects")
@endsection
@section('content')
    <style>
        body {
            min-height: 100vh;
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
        }
    </style>
    <div class="cover-container d-flex w-100 h-100 p-3 pt-5 mx-auto flex-column">
        <main class="px-3">
            <h1>Рады тебя приветствовать.</h1>
            <p class="lead">Скорее переходи к обучению, чтобы не забыть то, что ты прошёл на прошлом уроке!</p>
            <p class="lead">
                <a href="#" class="btn btn-primary btn-lg">К заданиям!</a>
            </p>
        </main>
    </div>
@endsection
