<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Transaction Code'
    ])

    @if(Session::has('message'))
        <div class="alert alert-info fixed-top w-50" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    {{-- transacation code --}}
                    <tr>
                        <td>Transaction Code</td>
                        <td>{{$transaction->transaction_code}}</td>
                    </tr>
                    {{-- transaction code end --}}

                    {{-- Customer name start --}}
                    <tr>
                        <td>Customer</td>
                        <td>{{ $transaction->user->name }}</td>
                    </tr>
                    {{-- Customer name end --}}

                    {{-- Date start --}}
                    <tr>
                        <td>Date</td>
                        <td>{{ date("M d, Y", strtotime($transaction->created_at)) }}</td>
                    </tr>
                    {{-- Date end --}}

                    {{-- Status start --}}
                    <tr>
                        <td>Status</td>
                        <td>
                            @foreach($statuses as $status)
                                @if($transaction->requestStatus->id === $status->id)
                                    {{ ucwords($status->name) }}
                                @endif
                            @endforeach
                            @can('isAdmin')
                                <form
                                    action="{{ route('transactions.update', $transaction->id) }}"
                                    method="post"
                                    class="input-group">
                                    @csrf
                                    @method("PUT")
                                    <select
                                        class="custom-select"
                                        id="status_id"
                                        name="status_id"
                                        aria-label="Example select with button addon">
                                        @foreach($statuses as $status)
                                            <option
                                                value="{{$status->id}}"
                                                {{ $status->id === $transaction->requestStatus->id ? 'selected' : '' }}>
                                            {{ ucwords($status->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary rounded-0">Update</button>
                                    </div>
                                </form>
                            @endcan
                        </td>
                    </tr>
                    {{-- Status end --}}

                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            {{-- table start --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Asset</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaction->assets as $asset)
                            <tr>
                                <td>
                                    @foreach($categories as $category)
                                        {{ $category->id === $asset->category_id ? $category->name : '' }}
                                    @endforeach
                                </td>
                                <td>{{$asset->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- table end --}}
        </div>
    </div>
</x-dynamic>
