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
                    @foreach(range(1,5) as $item)
                        <tr>
                            <td>Product Name</td>
                            <td class="text-center">
                                Remove
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td>
                                {{-- <form action="{{ route('requests.store') }}" method="post"> --}}
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
</x-dynamic>
