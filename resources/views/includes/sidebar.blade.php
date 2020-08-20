<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">
            
            <a href="index.html" class="logo"><img src="{{ asset('zinzer/assets/images/logo_dark.png') }}" height="20" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li class="{{ request()->is('dashboard') ? ' nav-active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                    </a>
                </li>               

                @if (Auth::user()->role == 'admin')
                    <li class="menu-title">Post</li>

                    <li class="{{ request()->is('post') ? ' nav-active' : '' }}">
                        <a href="{{ route('post') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Semua </span></a>
                    </li>                

                    <li class="{{ request()->is('post/create') ? ' nav-active' : '' }}">
                        <a href="{{ route('post.create') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Posting </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Tables </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables-basic.html">Basic Tables</a></li>                        
                        </ul>
                    </li>

                    <li class="menu-title">Lahan</li>

                    <li class="{{ request()->is('lahan') ? ' nav-active' : '' }}">
                        <a href="{{ route('farm') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Semua </span></a>
                    </li>

                    <li class="{{ request()->is('lahan/create') ? ' nav-active' : '' }}">
                        <a href="{{ route('farm.create') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Tambah </span></a>
                    </li>

                    <li class="menu-title">User</li>

                    <li class="{{ request()->is('user') ? ' nav-active' : '' }}">
                        <a href="{{ route('user') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Semua </span></a>
                    </li>
                @elseif(Auth::user()->role == 'petani')
                    <li class="menu-title">Lahan</li>

                    <li class="{{ request()->is('post') ? ' nav-active' : '' }}">
                        <a href="{{ route('farm') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Semua </span></a>
                    </li>                

                    <li class="{{ request()->is('post/create') ? ' nav-active' : '' }}">
                        <a href="{{ route('farm.create') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Posting </span></a>
                    </li>
                @endif
                        
                
                {{-- <li class="menu-title">Invest</li>

                <li class="{{ request()->is('') ? ' nav-active' : '' }}">
                    <a href="{{ route('post') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Semua </span></a>
                </li>                

                <li class="{{ request()->is('') ? ' nav-active' : '' }}">
                    <a href="{{ route('invest.project') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Projek </span></a>
                </li> --}}
{{-- 
                @if (Auth::user()->role == 'petani')
                    <li class="menu-title">Lahan</li>

                    <li class="{{ request()->is('lahan') ? ' nav-active' : '' }}">
                        <a href="{{ route('lahan') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Semua </span></a>
                    </li>                

                    <li class="{{ request()->is('lahan/create') ? ' nav-active' : '' }}">
                        <a href="{{ route('lahan.create') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Tambah Lahan </span></a>
                    </li>
                @endif --}}
                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->