<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Basket'
    ])

    <div class="row row-cols-1">
        <div class="col-12">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Item Name</th>
                        <th
                            scope="col"
                            style="width: 10rem"
                            class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($assets as $asset)
                        <tr>
                            <td>{{ $asset->name }}</td>
                            <td class="text-center">
                                <button
                                    type="button"
                                    class="btn btn-outline-dark btn-sm rounded-0"
                                    data-toggle="modal"
                                    data-target="#staticBackdrop">
                                    Remove
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                <button
                                    class="btn btn-block btn-dark rounded-0">
                                    Checkout
                                </button>
                            </form>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    {{-- modal --}}
    @include('_partials._delete_modal', [
        'singular_name' => $asset->name,
        'plural_name' => 'assets',
        'id' => $asset->id
    ])
</x-dynamic>
