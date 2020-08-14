@extends('layouts.app')

@section('content')
    <div class="row">

        @includeWhen(Session::has('message'), 'alerts.alert-success')

        <div class="col-12 rounded-lg border border-info p-3">
            <h2 class="text-center">
                {{ ucwords($category->name) }}
            </h2>
        </div>
    </div>
@endsection
