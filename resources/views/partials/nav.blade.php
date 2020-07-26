<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('assets/img/im.png') }}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">{{ Auth::user()->name }}<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                          
                        </ul>
                    </div>
                    <div class="logo-element">
                        ISTAG
                    </div>
                </li>

                @if( auth()->check() )

                    <li>
                        <a href="  "><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="  {{ route('etudiant.index') }}"><i class="fa fa-users"></i> <span class="nav-label">Etudiant</span></a>
                    </li>
               
                @endif
            </ul>

        </div>
    </nav>
