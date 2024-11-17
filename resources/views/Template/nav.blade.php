<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('images/avatar.png')}}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">

        <li>
            <a class="app-menu__item" href="/dashboard">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa-solid fa-car-side"></i>
                <span class="app-menu__label">{{ __(' Cars') }}</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ route('cars.index' )}}"><i class="app-menu__icon fa-solid fa-car"></i> {{ __(' Cars') }}</a></li>
            </ul> 
        </li>

        <li>
            
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf

                <a style="color:#fff;cursor:pointer;" class="app-menu__item" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <span class="app-menu__label"><i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i> {{ __('Log Out') }}</span>
                </a>
            </form>
        </li>
      </ul>
    </aside>
