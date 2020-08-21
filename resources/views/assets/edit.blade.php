@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 rounded-lg border border-info p-3">
            <h2 class="text-center">Edit Category</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 py-3 mx-auto">
            <form
                method="post"
                action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input
                        type="text"
                        class="@error('name') is-invalid @enderror form-control form-control-lg"
                        name="name"
                        value="{{ $category->name }}"
                        id="name">

                    @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
