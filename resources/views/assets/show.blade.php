<x-dynamic>
    @include('_partials._heading', [
        'heading' => $asset->name
    ])

    @include('_partials._inventory_navs')
    <div class="row mt-3">
        <div class="col-4">
            <div class="card rounded-0 p-3">
                <img
                    src="{{ asset($asset->image) }}"
                    class="card-img-top"
                    alt="{{ $asset->name }}">
            </div>
        </div>


        <div class="col-8 pl-0">
            <div class="card rounded-0">
                <div class="card-body">
                    <a
                        href="{{ route('categories.show', $asset->category->id) }}"
                        class="card-title mb-4 badge badge-secondary">
                        {{ $asset->category->name }}
                    </a>

                    <h5 class="card-title">
                        {{ ucwords($asset->name) }}
                    </h5>

                    <p class="card-text">
                        {{ $asset->description }}
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <p class="card-text">
                                <small>
                                    Status:
                                </small>
                                <br>

                                {{-- show available if there is item available --}}
                                @if ($asset->isAvailable($asset->id))
                                    <span class="text-success">
                                        Available
                                    </span>
                                @else
                                    <span class="text-danger">
                                        Not Available
                                    </span>
                                @endif
                            </p>
                        </div>

                        <div class="col-6 text-right mt-3">
                            @cannot('isAdmin')
                                @if ($asset->isAvailable($asset->id))
                                    @if (Session::has('basket') && in_array($asset->id, array_keys(session('basket'))))
                                        <a
                                            class="btn btn-dark btn-sm rounded-0 disabled">
                                            Already in basket
                                        </a>
                                    @else
                                        <form
                                            action="{{ route('basket.update', $asset->id) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <button
                                                class="btn btn-dark btn-sm rounded-0">
                                                Add to basket
                                            </button>
                                        </form>
                                    @endif
                                @else
                                    <a
                                        class="btn btn-dark btn-sm rounded-0 disabled">
                                        Add to basket
                                    </a>
                                @endif
                            @endcan
                        </div>
                    </div>
                </div>

                @can('isAdmin')
                    <div class="card-footer flex justify-content-between">
                        <small
                            class="text-muted">
                            Updated {{ $asset->updated_at->diffForHumans() }}
                        </small>

                        <div class="d-inline-block text-right float-right">
                            <a
                                href="{{ route('assets.show', $asset->id) }}">
                                View
                            </a>
                            <a
                                class="px-3"
                                href="{{ route('assets.edit', $asset->id) }}">
                                Edit
                            </a>

                            {{-- button trigger modal --}}
                            <button
                                type="button"
                                class="btn btn-dark btn-sm rounded-0"
                                data-toggle="modal"
                                data-target="#staticBackdrop">
                                Delete
                            </button>
                        </div>
                    </div>
                    {{-- modal --}}
                    @include('_partials._delete_modal', [
                        'singular_name' => $asset->name,
                        'plural_name' => 'assets',
                        'id' => $asset->id
                    ])
                @endcan
            </div>
        </div>
    </div>
</x-dynamic>
