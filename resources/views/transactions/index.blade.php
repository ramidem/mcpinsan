<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'All Transactions'
    ])

    <div class="row row-cols-1">
        <div class="col-12">
            <div class="card text-center rounded-0 p-0">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link rounded-0 active btn-dark" href="#">Processing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" href="#">Processing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" href="#">Processing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" href="#">Processing</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <table class="table table-hover m-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">Code</th>
                                <th scope="col" class="text-left">Date</th>
                                <th
                                    scope="col"
                                    style="width: 10rem"
                                    class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(range(1,5) as $asset)
                                <tr>
                                    <td class="text-left">MCP-11111111</td>
                                    <td class="text-left">Jan 2020</td>
                                    <td class="text-center">
                                        view
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dynamic>
