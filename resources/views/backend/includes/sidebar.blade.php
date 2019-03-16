<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('dashboard')) }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            <li class="nav-title">
                @lang('menus.backend.sidebar.system')
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('auth*')) }}" href="#">
                        <i class="nav-icon icon-user"></i> @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="divider"></li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('nccne*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('nccne*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>你瞅啥
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('nccne/filterword*')) }}" href="{{ route('admin.nccne.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('jiangshanshi*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('jiangshanshi*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>拼购网
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('jiangshanshi/filterword*')) }}" href="{{ route('admin.jiangshanshi.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('jiangyihua*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('jiangyihua*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>讲一话
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('jiangyihua/filterword*')) }}" href="{{ route('admin.jiangyihua.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('gxcor*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('gxcor*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>购酷网
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('gxcor/filterword*')) }}" href="{{ route('admin.gxcor.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('chinawbk*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('chinawbk*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>移动图书网
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('chinawbk/filterword*')) }}" href="{{ route('admin.chinawbk.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('chinashangpinku*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('chinashangpinku*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>中华商品库
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('chinashangpinku/filterword*')) }}" href="{{ route('admin.chinashangpinku.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('chengyekeji*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('chengyekeji*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>橙页知识网
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('chengyekeji/filterword*')) }}" href="{{ route('admin.chengyekeji.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('byete*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('byete*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>必应比价网
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('byete/filterword*')) }}" href="{{ route('admin.byete.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('mchinawbk*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('mchinawbk*')) }}" href="#">
                    <i class="nav-icon icon-list"></i>移动影音网
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('mchinawbk/filterword*')) }}" href="{{ route('admin.mchinawbk.filterword.index') }}">
                            敏感词
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}" href="#">
                    <i class="nav-icon icon-list"></i> @lang('menus.backend.log-viewer.main')
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            @lang('menus.backend.log-viewer.dashboard')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            @lang('menus.backend.log-viewer.logs')
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
