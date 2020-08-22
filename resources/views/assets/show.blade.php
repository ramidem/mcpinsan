<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Asset'
    ])

    @include('_partials._inventory_navs')

    <div class="row row-cols-1 mt-3">
        <div class="col mb-4">
            <div class="card h-100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img
                            {{-- src="{{ $asset->image }}" --}}
                             src="https://via.placeholder.com/500"
                             class="card-img"
                             alt="{{ $asset->name }}">
                    </div>
                    <div class="col-md-8">
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
                            <p class="card-text">
                                <small
                                    class="text-muted">
                                    Last updated {{ $asset->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                        <div class="card-footer text-right sticky-bottom">
                            <a
                                class="px-3"
                                href="{{ route('assets.edit', $asset->id) }}">
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
                            'singular_name' => 'asset',
                            'plural_name' => 'assets',
                            'id' => '1'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dynamic>
