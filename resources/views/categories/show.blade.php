<x-dynamic>
    @include('_partials._heading', [
        'heading' => "Category: $category->name"
    ])

    @include('_partials._inventory_navs')

    <div class="row">
        <div class="col-12">
            Hello
        </div>
    </div>
</x-dynamic>
