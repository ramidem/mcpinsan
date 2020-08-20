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
                    {{-- @foreach(range(1, 30) as $item) --}}
                        <tr>
                            <td>MCP-13JNS1</td>
                            <td>Asset Name here</td>
                            <td>Available | Lent | Missing</td>
                            <td>View | Edit | Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dynamic>
