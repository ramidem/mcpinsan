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
                                src="{{ asset($asset->image) }}"
                                class="card-img-top p-3"
                                alt="{{ $asset->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('assets.show', $asset->id) }}">
                                            {{ $asset->name }}
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        {{ $asset->description }}
                                    </p>
                                </div>
                                <div class="card-footer text-right">
                                    @cannot('isAdmin')
                                        @if ($asset->isAvailable($asset->id))
                                            @if (Session::has('basket') && in_array($asset->id, array_keys(session('basket'))))
                                                <a
                                                    class="btn btn-dark btn-block rounded-0 disabled">
                                                    Already in basket
                                                </a>
                                            @else
                                                <form
                                                    action="{{ route('basket.update', $asset->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button
                                                        class="btn btn-dark btn-block rounded-0">
                                                        Add to basket
                                                    </button>
                                                </form>
                                            @endif
                                        @else
                                            <a
                                                class="btn btn-dark btn-block rounded-0 disabled">
                                                Add to basket
                                            </a>
                                        @endif
                                    @endcan

                                    @can('isAdmin')
                                        {{-- button trigger modal --}}
                                        <button
                                            type="button"
                                            class="btn btn-dark btn-block rounded-0"
                                            data-toggle="modal"
                                            data-target="#staticBackdrop">
                                            Delete
                                        </button>
                                        {{-- modal --}}
                                    @endcan
                                </div>
                                @include('_partials._delete_modal', [
                                    'singular_name' => $asset->name,
                                    'plural_name' => 'assets',
                                    'id' => $asset->id
                                ])
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</x-dynamic>
