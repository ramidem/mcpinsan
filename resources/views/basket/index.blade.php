<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Basket'
    ])

    @if(Session::has('message'))
            <div class="alert alert-info fixed-top w-50" role="alert">
                {{ Session::get('message') }}
            </div>
    @endif

    {{-- {{ dd(session('basket')) }} --}}
    @if(!Session::has('basket'))

        {{-- alert start --}}
        <div class="row">
            <div class="col-4 mx-auto my-5">
                <svg width="100%" height="100%" viewBox="0 0 16 16" class="bi bi-basket3" fill="#eee" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 1 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                    <path d="M0 6.5A.5.5 0 0 1 .5 6h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zM.81 9c0 .035.004.07.011.105l1.201 5.604A1 1 0 0 0 3 15.5h10a1 1 0 0 0 .978-.79l1.2-5.605A.495.495 0 0 0 15.19 9h-1.011L13 14.5H3L1.821 9H.81z"/>
                </svg>
            </div>
        </div>
        {{-- alert end --}}

    @else

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
                            {{-- modal --}}
                            @include('_partials._delete_modal', [
                                'singular_name' => $asset->name,
                                'plural_name' => 'basket',
                                'id' => $asset->id
                            ])
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{route('basket.clear')}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="button"
                                                class="btn btn-outline-danger rounded-0"
                                                data-toggle="modal"
                                                data-target="#clearBackdrop">
                                                Remove
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('transactions.store') }}" method="post">
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

        <div
            class="modal fade"
            id="clearBackdrop"
            data-backdrop="static"
            data-keyboard="false"
            tabindex="-1"
            aria-labelledby="clearBackdropLabel"
            aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Are you sure you want to remove all the items from basket?
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm"
                            data-dismiss="modal">
                            Cancel
                        </button>
                        <form
                            class="d-inline-block"
                            action="{{ route("basket.clear") }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark btn-sm">
                                Clear
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-dynamic>
