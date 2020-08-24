<li class="nav-item">
    <a
        class="
        nav-link
        dropdown-toggle
        {{ Request::is("inventory/$plural_name*") ? 'active' : '' }}"
        data-toggle="dropdown"
        role="button"
        aria-haspopup="true"
        aria-expanded="false"
        href="#">
        {{ ucwords($plural_name) }}
    </a>
    <div class="dropdown-menu">
        <a
            class="dropdown-item"

            href="/inventory/{{ $plural_name }}">
            View All {{ ucwords($plural_name) }}
        </a>
        <a
            class="dropdown-item"
            href="/inventory/{{ $plural_name }}/create">
            Add New {{ ucwords($singular_name) }}
        </a>
    </div>
</li>
