@extends('layouts.main')

@section('content')

<section class="container">
    <h1>Edit: {{ $comics->title }}</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.update', $comics->id) }}" method="POST">
                    @csrf 
                       @method('PATCH')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                        value="{{ $comics->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" row="6">{{ $comics->description}}" ></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="comic-book" @if ($comics->type) selected @endif>Comic Book</option>
                            <option value="graphic-novel"  @if ($comics->type) selected @endif>graphic-novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                        value="{{ $comics->thumb}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                        value="{{ $comics->price}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comics->sale_date}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                        value="{{ $comics->series}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Comic</button>
                </form>
            </div>
        </div>
</section>
    
@endsection