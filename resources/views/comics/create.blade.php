@extends('layouts.main')

@section('content')

<section class="container">
    <h1> Create new Comics</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf 

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" row="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="comic-book">Comic Book</option>
                            <option value="graphic-novel">graphic-novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Comic</button>
                </form>
            </div>
        </div>
</section>
    
@endsection