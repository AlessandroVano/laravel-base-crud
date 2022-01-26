@extends('layouts.main')

@section('content')
    <section class="container">
        <h1>COMICS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumb</th>
                    <th>price</th>
                    <th>Series</th>
                    <th>Sale_date</th>
                    <th>Type</th>
                    
                </tr>
                <tbody>
                      @foreach ( $comics as $comic )
                          <tr>
                              <td> {{$comic->id}} </td>
                              <td> {{$comic->title}} </td>
                              <td class="text-truncate" style="max-width: 350px"> {{$comic->description}} </td>
                              <td class="text-truncate" style="max-width: 350px"> {{$comic->thumb}} </td>
                              <td> {{$comic->price}} </td>
                              <td> {{$comic->series}} </td>
                              <td> {{$comic->sale_date}} </td>
                              <td> {{$comic->type}} </td>
                          </tr>
                      @endforeach
                </tbody>
            </thead>
        </table>
    </section>
@endsection