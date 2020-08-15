@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 rounded-lg border border-info p-3">
            <a
                href="{{ route('categories.create')}}"
                class="btn btn-primary btn-sm">
                Add Category
            </a>
        </div>
    </div>
    @includeWhen(Session::has('message'), 'alerts.alert-success')
    <div class="row">
        <div class="col-12 py-3">
            @foreach($categories as $category)
                <h2>
                    <a href="{{ route('categories.show', $category->id) }}">
                        {{ ucwords($category->name) }}
                    </a>
                </h2>
            @endforeach
        </div>
    </div>
@endsection
