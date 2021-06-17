<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home.index') }}">
        <div class=" sidebar-brand-text mx-3">Enseval</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home.index') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogistik" aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-folder"></i>
            <span>Logistik</span>
        </a>
        <div id="collapseLogistik" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('logistik.driver.index') }}">Driver</a>
                <a class="collapse-item" href="{{ route('logistik.vehicle.index') }}">Vehicle</a>
                <a class="collapse-item" href="{{ route('logistik.product.index') }}">Product</a>
                <a class="collapse-item" href="{{ route('logistik.delivery.index') }}">Delivery</a>
                <a class="collapse-item" href="{{ route('logistik.tracking.index') }}">Tracking</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWarehouse" aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-folder"></i>
            <span>Warehouse</span>
        </a>
        <div id="collapseWarehouse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('warehouse.warehouse.index') }}">Warehouse</a>
                <a class="collapse-item" href="{{ route('warehouse.operational.index') }}">Operational</a>
                <a class="collapse-item" href="{{ route('warehouse.maintenance.index') }}">Maintenance</a>
                <a class="collapse-item" href="{{ route('warehouse.stock.index') }}">Stock</a>
                <a class="collapse-item" href="{{ route('warehouse.inbound.index') }}">Inbound</a>
                <a class="collapse-item" href="{{ route('warehouse.outbound.index') }}">Outbound</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinance" aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-folder"></i>
            <span>Finance</span>
        </a>
        <div id="collapseFinance" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('financial.pemasuakn.index') }}">Pemasukan</a>
                <a class="collapse-item" href="{{ route('financial.pengeluaran.index') }}">Pengeluaran</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class=" sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>