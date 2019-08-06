<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
                <a class="navbar-brand" href="/" target="_blank"><b><span class="text-primary">BPN </span>KUBU RAYA</b></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span>{{ auth()->user()->name }}</span>
						<i class="caret"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user"></i> My profile</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i> 
                                    {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
    <!-- /main navbar -->
    <div class="navbar navbar-default" id="navbar-second">
            <ul class="nav navbar-nav no-border visible-xs-block">
                <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
            </ul>
    
            <div class="navbar-collapse collapse" id="navbar-second-toggle">
                <ul class="nav navbar-nav navbar-nav-material">
                    <!-- Main -->
                    
                    <li class="{{ request()->is('*/dashboard') ? 'active' : '' }}"><a href="{{ route('check-dashboard') }}"><i class="icon-home4 position-left"></i> <span>Dashboard</span></a></li>
                    @role('Admin|Superadmin')
                    <li class="{{ request()->is('*/user') ? 'active' : '' }}"><a href="{{ route('user.index') }}"><i class="icon-user position-left"></i> <span>User</span></a></li>
                    @endrole
                    @role('Superadmin')
                    <li>
                        <a href="#"><i class="icon-stack position-left"></i> <span>Role & Permission</span></a>
                        <ul>
                            <li class="{{ request()->is('*/role') ? 'active' : '' }}"><a href="{{ route('role.index') }}">Role</a></li>
                            <li class="{{ request()->is('*/permission') ? 'active' : '' }}"><a href="{{ route('permission.index') }}">Permission</a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('Loket|Superadmin')
                    <li class="{{ request()->is('loket/permohonan/create') ? 'active' : '' }}"><a href="{{ route('loket.permohonan.create') }}"><i class="icon-user position-left"></i> <span> Tambah Permohonan</span></a></li>
                    @endrole
                    @role('IP|Superadmin')
                    <li class="{{ request()->is('ip/permohonan/create') ? 'active' : '' }}"><a href="{{ route('ip.permohonan.create') }}"><i class="icon-user position-left"></i> <span> Permohonan Masuk</span></a></li>
                    @endrole
                    @role('P2|Superadmin')
                    <li class="{{ request()->is('p2/permohonan/create') ? 'active' : '' }}"><a href="{{ route('p2.permohonan.create') }}"><i class="icon-user position-left"></i> <span> Permohonan Masuk</span></a></li>
                    @endrole
                    @role('HHP|Superadmin')
                    <li class="{{ request()->is('hhp/permohonan/create') ? 'active' : '' }}"><a href="{{ route('hhp.permohonan.create') }}"><i class="icon-user position-left"></i> <span> Permohonan Masuk</span></a></li>
                    @endrole
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /second navbar -->