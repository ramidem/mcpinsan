<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'All Assets'
    ])

    @include('_partials._inventory_navs')

    <div class="row row-cols-1 mt-3">
        @foreach(range(1,5) as $card)
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img
                                src="https://via.placeholder.com/200x200"
                                class="card-img"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a
                                    href="{{ route('categories.index') }}"
                                    class="card-title mb-4 badge badge-secondary">
                                    category
                                </a>

                                <h5 class="card-title">
                                    Card title
                                </h5>

                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                                <p class="card-text">
                                    <small
                                        class="text-muted">
                                        Last updated 3 mins ago
                                    </small>
                                </p>
                                <p class="text-right">
                                    <a
                                        {{-- href="{{ route('assets.show', $item->id) }}"> --}}
                                             href="#">
                                             View
                                    </a>
                                    <a
                                        class="px-3"
                                        {{-- href="{{ route('assets.edit', $item->id) }}"> --}}
                                             href="#">
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
                                </p>
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
        @endforeach
    </div>
</x-dynamic>
