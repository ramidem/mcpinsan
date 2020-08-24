<div class="row">
    <div class="col-12">
        <ul class="nav nav-pills nav-justified">
            @cannot('isAdmin')
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is("inventory/assets*") ? 'active' : '' }}"
                    href="/inventory/assets">
                    Assets
                </a>
            </li>

            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is("inventory/categories*") ? 'active' : '' }}"
                    href="/inventory/categories">
                    Categories
                </a>
            </li>
            @endcannot

            @can('isAdmin')
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
            @endcan
        </ul>
    </div>
</div>
