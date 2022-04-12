<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{url('image/hotel.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('role','admin')
                <x-nav-item label="User Admin" icon="fas fa-users" :link="route('admin.index')"/>
                <x-nav-item label="Kamar" icon="fas fa-bed" :link="route('kamar.index')"/>
                <x-nav-item label="Fasilitas Kamar" icon="fas fa-door-open" :link="route('fasilitaskmr.index')"/>
                <x-nav-item label="Fasilitas Hotel" icon="fas fa-building" :link="route('fasilitashtl.index')"/>
                @endcan
                <x-nav-item label="Pemesanan" icon="fas fa-receipt" :link="route('pemesanan.index')"/>
            </ul>
        </nav>

    </div>

</aside>
