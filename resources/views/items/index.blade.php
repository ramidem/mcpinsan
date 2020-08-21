<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'All Items'
    ])

    @include('_partials._inventory_navs')

    <div class="row">
        <div class="col-12">
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Asset</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->code }}</td>
                            <td>_asset_name_</td>
                            <td>_item_status_</td>
                            <td>
                                <a
                                    href="{{ route('items.show', $item->id) }}">
                                    View
                                </a>
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
                            </td>
                        </tr>
                        {{-- modal --}}
                        @include('_partials._delete_modal', [
                            'singular_name' => $item->code,
                            'plural_name' => 'items',
                            'id' => $item->id
                        ])
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dynamic>
