<div class="row">
    <div class="col-12">
        <ul class="nav nav-pills nav-justified">
            @include('_partials/_inventory_navs_list_items', [
                'plural_name' => 'assets',
                'singular_name' => 'asset',
            ])

            @include('_partials/_inventory_navs_list_items', [
                'plural_name' => 'items',
                'singular_name' => 'item',
            ])

            @include('_partials/_inventory_navs_list_items', [
                'plural_name' => 'categories',
                'singular_name' => 'category',
            ])
        </ul>
    </div>
</div>
