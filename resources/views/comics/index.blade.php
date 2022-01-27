@extends('layouts.main')

@section('content')
    <section class="container mt-5">
        <h1>COMICS</h1>

        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                Hai cancellato il fumetto correttamente
            </div>
        @endif

        <table class="table  my-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                 {{--    <th>Thumb</th> --}}
                    <th>price</th>
                    <th>Series</th>
                  {{--   <th>Sale_date</th> --}}
                    <th>Type</th>
                    
                </tr>
                <tbody>
                      @foreach ( $comics as $comic )
                          <tr>
                              <td> {{$comic->id}} </td>
                              <td> {{$comic->title}} </td>
                              <td class="text-truncate" style="max-width: 350px"> {{$comic->description}} </td>
                         {{--      <td class="text-truncate" style="max-width: 350px"> {{$comic->thumb}} </td> --}}
                              <td> {{$comic->price}} </td>
                              <td> {{$comic->series}} </td>
                            {{--   <td> {{$comic->sale_date}} </td> --}}
                              <td> {{$comic->type}} </td>
                              <td>
                                  <a class="btn btn-success"  href="{{ route('comics.show', $comic->id) }} ">SHOW</a>
                              </td>
                              <td>
                                <a class="btn btn-primary"  href="{{ route('comics.edit', $comic->id) }} ">EDIT</a>
                            </td>
                            <td>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf 
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Delete"

                                    onclick="return confirm('sei sicuro di voler eliminare questo fumetto?')">
                                </form>
                            </td>
                          </tr>
                      @endforeach
                </tbody>
            </thead>
        </table>
    </section>
@endsection