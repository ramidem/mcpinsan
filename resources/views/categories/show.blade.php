<x-dynamic>
    @include('_partials._heading', [
        'heading' => $category->name
    ])

    @include('_partials._inventory_navs')

    <div class="row row-cols-1">
        @foreach($category->assets as $asset)
            <div class="col mt-3">
                <div class="card h-100">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img
                                src="{{ asset('/storage/'.$asset->image) }}"
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
        @endforeach
    </div>
</x-dynamic>
