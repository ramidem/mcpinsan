<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'All Categories'
    ])

    @include('_partials._inventory_navs')

    <div class="row">
        <div class="col mt-3">
            @foreach($categories as $category)
                <div class="d-flex justify-content-between align-items-end">
                    <h3 class="mt-4">
                        <a href="{{ route('categories.show', $category->id) }}">
                        {{ ucwords($category->name) }}
                        </a>
                    </h3>
                    <small class="pb-2">
                        <a href="{{ route('categories.show', $category->id) }}">
                        more
                        </a>
                    </small>
                </div>
                <div class="card-group mt-3">
                    @foreach($category->assetsLimited as $asset)
                        <div class="card mx-sm-0" style="max-width:269px">
                            <img
                                src="{{ asset('/storage/'.$asset->image) }}"
                                class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('assets.show', $asset->id) }}">
                                    {{ $asset->name }}
                                    </a>
                                </h5>
                                <p class="card-text">
                                    _available_/_total_
                                </p>
                            </div>
                            <div class="card-footer text-right">
                                {{-- button trigger modal --}}
                                <button
                                    type="button"
                                    class="btn btn-dark btn-sm btn-block"
                                    data-toggle="modal"
                                    data-target="#staticBackdrop">
                                    Delete | Borrow/Reserve btn instead?
                                </button>
                            </div>
                            {{-- modal --}}
                            @include('_partials._delete_modal', [
                                'singular_name' => 'asset',
                                'plural_name' => 'assets',
                                'id' => '1'
                            ])
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</x-dynamic>
