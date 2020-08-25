<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'All Transactions'
    ])

    <div class="row row-cols-1">
        <div class="col-12">
            <table class="table table-hover m-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="text-left">Code</th>
                        <th scope="col" class="text-left">Date</th>
                        <th scope="col" class="text-left">Status</th>
                        <th
                            scope="col"
                            style="width: 10rem"
                            class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @cannot('isAdmin')
                    @foreach($transactions as $transaction)
                        @if(auth()->user()->id === $transaction->user_id)
                            {{ dd($transactions) }}
                        <tr>
                            <td class="text-left">
                                {{ $transaction->transaction_code }}
                            </td>
                            <td class="text-left">
                                {{ date("F j, Y", strtotime($transaction->created_at)) }}
                            </td>
                            <td class="text-left">
                                {{ ucwords($transaction->requestStatus->name) }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('transactions.show', $transaction->id) }}">
                                    view
                                </a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    @endcannot

                    @can('isAdmin')
                    @foreach($transactions as $transaction)
                        <tr>
                            <td class="text-left">
                                {{ $transaction->transaction_code }}
                            </td>
                            <td class="text-left">
                                {{ date("F j, Y", strtotime($transaction->created_at)) }}
                            </td>
                            <td class="text-left">
                                {{ ucwords($transaction->requestStatus->name) }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('transactions.show', $transaction->id) }}">
                                    view
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @endcan
                </tbody>
            </table>
        </div>
    </div>
</x-dynamic>
