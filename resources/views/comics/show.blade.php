@extends('layouts.main')

@section('content')

<section class="container">
    <h1>{{ $comics->title }}</h1>
     <span>{{ $comics->series }}</span>
     <span>{{ $comics->sale_date }}</span>
    

    <div class="row mb-5">
        <div class="col-md-6">
         <img src=" {{ $comics->thumb}}  " alt="{{ $comics->title }}">
      
        </div>
        <div class="col-md-6 mb-3">
            {!! $comics->description !!}
        </div>
        <span> Price:{{ $comics->price }}</span>
    </div>

    <a href="{{route('comics.index')}}">Back to Archive</a>
</section>
    
@endsection