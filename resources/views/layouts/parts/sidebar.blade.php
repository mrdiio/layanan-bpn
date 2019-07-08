<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Admin</span> <i class="icon-menu" title="Admin Pages"></i></li>
                    <li><a href="/home"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li>
                        <a href="#"><i class="icon-users"></i> <span>User</span></a>
                        <ul>
                            <li class="{{ request()->is('*/user') ? 'active' : '' }}"><a href="{{ route('user.index') }}">List User</a></li>
                            
                            <li class="{{ request()->is('*/role') ? 'active' : '' }}"><a href="{{ route('role.index') }}">Role</a></li>
                            <li class="{{ request()->is('*/permission') ? 'active' : '' }}"><a href="{{ route('permission.index') }}">Permission</a></li>
                        </ul>
                    </li>
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>