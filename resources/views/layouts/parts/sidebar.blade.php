<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>{{ auth()->user()->roles->pluck('name')->first() }}</span> <i class="icon-menu" title="Admin Pages"></i></li>
                    <li class="{{ request()->is('*/dashboard') ? 'active' : '' }}"><a href="{{ route('check-dashboard') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    @role('Admin|Superadmin')
                    <li class="{{ request()->is('*/user') ? 'active' : '' }}"><a href="{{ route('user.index') }}"><i class="icon-user"></i> <span>User</span></a></li>
                    @endrole
                    @role('Superadmin')
                    <li>
                        <a href="#"><i class="icon-stack"></i> <span>Role & Permission</span></a>
                        <ul>
                            <li class="{{ request()->is('*/role') ? 'active' : '' }}"><a href="{{ route('role.index') }}">Role</a></li>
                            <li class="{{ request()->is('*/permission') ? 'active' : '' }}"><a href="{{ route('permission.index') }}">Permission</a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('Loket|Superadmin')
                    <li class="{{ request()->is('loket/permohonan/create') ? 'active' : '' }}"><a href="{{ route('permohonan.create') }}"><i class="icon-user"></i> <span> Tambah Permohonan</span></a></li>
                    @endrole
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>