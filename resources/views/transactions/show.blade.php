<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Transaction Code'
    ])

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
                            <form
                                action="{{ route('transactions.update', $transaction->id) }}"
                                method="post"
                                class="input-group">
                                @csrf
                                @method("PUT")
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    @foreach($statuses as $status)
                                        <option
                                            value="{{$status->id}}"
                                            {{ $status->id === $transaction->requestStatus->id ? 'selected' : '' }}>
                                            {{ ucwords($status->name) }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary rounded-0" type="button">Update</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    {{-- Status end --}}

                </table>
            </div>
        </div>
    </div>
</x-dynamic>
