@extends('layouts.main')

@section('content')
    <section class="container text-center">
        <h1>404</h1>

        <p class="mb-5"> ERRORE PAGINA NON TROVATA</p>

        <a class="btn btn-primary" href="{{ route('home')}}">Back to HOMEPAGE</a>
    </section>
@endsection