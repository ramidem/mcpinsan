@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 rounded-lg border border-info p-3">
            <a
                href="{{ route('categories.edit', $category->id)}}"
                class="btn btn-primary btn-sm">
                Edit Category
            </a>

            <form
                action="{{ route('categories.destroy', $category->id) }}"
                method="post"
                class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Remove Category</button>
            </form>
        </div>
    </div>
    @includeWhen(Session::has('message'), 'alerts.alert-success')
    <div class="row">
        <div class="col-12 p-3">
            <h2>
                {{ ucwords($category->name) }}
            </h2>
        </div>
    </div>
@endsection
