<small>NAVIGATION</small>
<hr>
<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <a
            class="nav-link {{ Request::is('account*') ? 'active' : '' }}"
            href="/account">
            Account
        </a>
    </li>
    <li class="nav-item">
        <a
            class="nav-link {{ Request::is('inventory*') ? 'active' : '' }}"
            href="/inventory/assets">
            Inventory
        </a>
    </li>
</ul>
