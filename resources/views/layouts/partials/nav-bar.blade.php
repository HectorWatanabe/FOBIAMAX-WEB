<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            @if(Auth::user()->role == 'Administrador')
            <li>
                <a href="{{ route('psychologists')}}"><i class="fa fa-group fa-fw"></i> Psicólogos</a>
            </li>
            @else
            <li>
                <a href="{{ route('patients')}}"><i class="fa fa-group fa-fw"></i> Clientes</a>
            </li>
            <li>
                <a href="{{ route('meetings')}}"><i class="fa fa-group fa-fw"></i> Citas</a>
            </li>
            @endif
        </ul>
    </div>
</div>