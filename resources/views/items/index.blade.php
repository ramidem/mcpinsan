<x-dynamic>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">
                Inventory
            </h2>
        </div>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="width: 190px;">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach(range(1, 30) as $row)
                <tr>
                    <td>Ergonomic Chairs</td>
                    <td>Item Description lorkm Regular table background variants are not available with the dark table, however, you may use text or background utilities to achieve similar styles.</td>
                    <td>Item Quantity</td>
                    <td>
                        <a href="#">
                            view
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dynamic>
