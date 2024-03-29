<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="{{route('portal.home')}}" class="d-inline-block">
            <img src="{{asset('assets/portal/images/logo_light.png')}}" alt="">
        </a>
    </div>
    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>
        <a target="_blank" href="https://darul-hikmah.sch.id" class="badge bg-success ml-md-3 mr-md-auto">Kunjungi Situs</a>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset(auth('user')->user()->user_image == null ? 'assets/portal/images/logo.png' : auth('user')->user()->user_image)}}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{strtoupper(auth('user')->user()->user_fullname)}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('portal.setting')}}" class="dropdown-item"><i class="icon-cog5"></i> Pengaturan</a>
                    <a href="{{route('logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Keluar</a>
                </div>
            </li>
        </ul>
    </div>
</div>
