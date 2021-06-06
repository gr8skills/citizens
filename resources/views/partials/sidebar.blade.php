<nav class="col-md-2 sidebar">
    <div class="user-box text-center pt-5 pb-3">
        <div class="user-img">
            <img src="{{ auth()->user()->present()->avatar }}"
                 width="90"
                 height="90"
                 alt="user-img"
                 class="rounded-circle img-thumbnail img-responsive">
        </div>
        <h5 class="my-3">
            <a href="{{ route('profile') }}">{{ auth()->user()->present()->nameOrEmail }}</a>
        </h5>

        <ul class="list-inline mb-2">
            <li class="list-inline-item">
                <a href="{{ route('profile') }}" title="@lang('app.my_profile')">
                    <i class="fas fa-cog"></i>
                </a>
            </li>

            <li class="list-inline-item">
                <a href="{{ route('auth.logout') }}" class="text-custom" title="@lang('app.logout')">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : ''  }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>@lang('app.dashboard')</span>
                </a>
            </li>

            @permission('citizens.manage')
            <li class="nav-item">
                <a href="#citizens-dropdown"
                   class="nav-link"
                   data-toggle="collapse"
                   aria-expanded="{{ Request::is('citizen*') ? 'true' : 'false' }}">
                    <i class="fas fa-database"></i>
                    <span>@lang('app.citizens')</span>
                </a>
                <ul class="{{ Request::is('citizen*') ? '' : 'collapse' }} list-unstyled sub-menu" id="citizens-dropdown">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : ''  }}" href="{{ route('dashboard') }}">
                            <span>@lang('app.citizens_dashboard')</span>
                        </a>
                    </li>
                    @permission('citizens.manage')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('citizen*') ? 'active' : ''  }}" href="{{ route('citizen.list') }}">
                            <span>@lang('app.citizens')</span>
                        </a>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission


            @permission('user.view', 'users.manage')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user*') ? 'active' : ''  }}" href="{{ route('user.list') }}">
                    <i class="fas fa-users"></i>
                    <span>@lang('app.users')</span>
                </a>
            </li>
            @endpermission

            @permission('users.activity')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('activity*') ? 'active' : ''  }}" href="{{ route('activity.index') }}">
                    <i class="fas fa-server"></i>
                    <span>@lang('app.activity_log')</span>
                </a>
            </li>
            @endpermission

            @permission(['roles.manage', 'permissions.manage'])
            <li class="nav-item">
                <a href="#roles-dropdown"
                   class="nav-link"
                   data-toggle="collapse"
                   aria-expanded="{{ Request::is('role*') || Request::is('permission*') ? 'true' : 'false' }}">
                    <i class="fas fa-users-cog"></i>
                    <span>@lang('app.roles_and_permissions')</span>
                </a>
                <ul class="{{ Request::is('role*') || Request::is('permission*') ? '' : 'collapse' }} list-unstyled sub-menu" id="roles-dropdown">
                    @permission('roles.manage')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('role*') ? 'active' : '' }}"
                           href="{{ route('role.index') }}">@lang('app.roles')</a>
                    </li>
                    @endpermission
                    @permission('permissions.manage')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('permission*') ? 'active' : '' }}"
                           href="{{ route('permission.index') }}">@lang('app.permissions')</a>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission

            @permission(['settings.general', 'settings.auth', 'settings.notifications'], false)
            <li class="nav-item">
                <a href="#settings-dropdown"
                   class="nav-link"
                   data-toggle="collapse"
                   aria-expanded="{{ Request::is('settings*') ? 'true' : 'false' }}">
                    <i class="fas fa-cogs"></i>
                    <span>@lang('app.settings')</span>
                </a>
                <ul class="{{ Request::is('settings*') ? '' : 'collapse' }} list-unstyled sub-menu"
                    id="settings-dropdown">

                    @permission('settings.general')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings') ? 'active' : ''  }}"
                           href="{{ route('settings.general') }}">
                            @lang('app.general')
                        </a>
                    </li>
                    @endpermission

                    @permission('settings.auth')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/auth*') ? 'active' : ''  }}"
                           href="{{ route('settings.auth') }}">@lang('app.auth_and_registration')</a>
                    </li>
                    @endpermission

                    @permission('settings.notifications')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/notifications*') ? 'active' : ''  }}"
                           href="{{ route('settings.notifications') }}">@lang('app.notifications')</a>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission
        </ul>
    </div>
</nav>

