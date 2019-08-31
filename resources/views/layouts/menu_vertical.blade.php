<header class="logo">
    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    <a href="{{ url('/home') }}"> <span id="logo"><h1><strong>SISGERMA</strong></h1></span>
    </a>
</header>
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
<div class="down">
    <a href=""><img src="{{ asset('vendor/vendor/images/admin.jpg') }}"></a>
    <a href=""><span class=" name-caret">{{ Auth::user()->name }}</span></a>
    <ul>
        <li><a class="tooltips" href=""><span>Profile</span><i class="lnr lnr-user"></i></a></li>
        <li><a class="tooltips" href=""><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
        <li>
            <a class="tooltips" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <span>Log out</span><i class="lnr lnr-power-switch"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>
<!--//down-->
<div class="menu">
    <ul id="menu">
        <li><a href="{{ url('/home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> Cadastros</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ url('/cliente') }}">Clientes</a></li>
                <li id="menu-academico-avaliacoes"><a href="{{ url('/register') }}">Usuarios</a>
            </ul>
        </li>
    </ul>
</div>