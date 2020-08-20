<div class="row">
    <div class="col-12">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::path() === 'inventory/assets' ? 'active' : '' }}"
                    href="#">
                    Assets
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link dropdown-toggle {{ Request::path() === 'inventory/items' ? 'active' : '' }}"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    href="#">
                    Items
                </a>
                <div class="dropdown-menu">
                    <a
                        class="dropdown-item"
                        href="/inventory/items">
                        View All Items
                    </a>
                    <a
                        class="dropdown-item"
                        href="/inventory/items/create">
                        Add Item
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::path() === 'inventory/categories' ? 'active' : '' }}"
                    href="#">
                    Categories
                </a>
            </li>
        </ul>
    </div>
</div>
