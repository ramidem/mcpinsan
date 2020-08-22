<x-dynamic>
    @include('_partials._heading', [
        'heading' => $item->code
    ])

    @include('_partials._inventory_navs')

    <div class="row row-cols-1 mt-3">
        <div class="col mb-4">
            <div class="card h-100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img
                            {{-- src="{{ $item->image }}" --}}
                                 src="https://via.placeholder.com/500"
                                 class="card-img"
                                 alt="{{ $item->asset->name }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5>
                                <a
                                    href="{{ route('categories.show', $item->asset->category->id) }}"
                                    class="card-title mb-4 badge badge-light">
                                    {{ strtoupper($item->asset->category->name) }}
                                </a>
                            </h5>

                            <h5 class="card-title">
                                {{ ucwords($item->asset->name) }}
                            </h5>

                            <p class="card-text">
                                {{ $item->asset->description }}
                            </p>
                            <p class="card-text">
                                <small
                                    class="text-muted">
                                    Item last updated {{ $item->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                        <div class="card-footer text-right sticky-bottom">
                            <a
                                class="px-3"
                                href="{{ route('items.edit', $item->id) }}">
                                Edit
                            </a>

                            {{-- button trigger modal --}}
                            <button
                                type="button"
                                class="btn btn-dark btn-sm"
                                data-toggle="modal"
                                data-target="#staticBackdrop">
                                Delete
                            </button>
                        </div>
                        {{-- modal --}}
                        @include('_partials._delete_modal', [
                            'singular_name' => $item->code,
                            'plural_name' => 'items',
                            'id' => $item->id
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dynamic>
