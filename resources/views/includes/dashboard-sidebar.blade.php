<div class="sidebar-wrapper">
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text">
            <img src="{{ asset('assets/img/logo-red.png')  }}" alt="CRYPTOWEALTH LIMITED">
        </a>
    </div>

    <ul class="nav">
        <li id="dashboard">
            <a href="{{ url('dashboard') }}">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="user.html">
                <i class="ti-import"></i>
                <p>Products</p>
            </a>
        </li>
        <li id="employees">
            <a href="{{ url('employee') }}">
                <i class="ti-view-list-alt"></i>
                <p>Employees</p>
            </a>
        </li>
        <li id="sales">
            <a href="{{ url('sales') }}">
                <i class="ti-share-alt"></i>
                <p>Sales</p>
            </a>
        </li>
        <li id="earnings">
            <a >
                <i class="ti-stats-up"></i>
                <p>Inventory</p>
            </a>
        </li>
        <li id="withdrawals">
            <a href="{{ url('withdrawals-history') }}">
                <i class="ti-stats-down"></i>
                <p>Inventory Logs</p>
            </a>
        </li>
        <li>
            <a href="{{ url('logout') }}">
                <i class="ti-arrow-circle-left"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</div>
