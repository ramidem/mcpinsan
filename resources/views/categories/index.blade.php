<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'All Categories'
    ])

    @include('_partials._inventory_navs')

    <div class="row">
        <div class="col-12">
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a
                                    href="">
                                    View
                                </a>
                                <a
                                    class="px-3"
                                    href="">
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
                            </td>
                        </tr>

                        {{-- modal --}}
                        @include('_partials._delete_modal', [
                            'singular_name' => $category->name,
                            'plural_name' => 'categories',
                            'id' => $category->id
                        ])
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dynamic>
