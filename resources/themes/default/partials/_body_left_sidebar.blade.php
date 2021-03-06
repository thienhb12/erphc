<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            @if (Auth::check())
                <div class="pull-left image">
                    @if(Auth::user()->avarta == NULL)
                        <p style="color:#FFF;margin: 10px 20px"><i class="fa fa-user fa-2x"></i></p>
                    @else
                        <img src="{{ asset("public/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                    @endif
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->full_name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            @endif
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{!!trans('general.left-sidebar.menu')!!}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('dashboard') }}"><i class='fa fa-link'></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>ACL Test</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('do-not-load') }}">           Route not loaded</a></li>
                    <li><a href="{{ route('no-perm')    }}">            No perm   </a></li>
                    <li><a href="{{ route('guest-only')   }}">          Guest only  </a></li>
                    <li><a href="{{ route('open-to-all')   }}">         Open to all  </a></li>
                    <li><a href="{{ route('basic-authenticated') }}">   Basic authenticated</a></li>
                    <li><a href="{{ route('admins')   }}">              Admins  </a></li>
                    <li><a href="{{ route('power-users')   }}">         Power users  </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('flash_test_success') }}"><i class='fa fa-check'>  </i> Success flash</a></li>
                    <li><a href="{{ route('flash_test_info')    }}"><i class='fa fa-info'>   </i> Info flash   </a></li>
                    <li><a href="{{ route('flash_test_warning') }}"><i class='fa fa-warning'></i> Warning flash</a></li>
                    <li><a href="{{ route('flash_test_error')   }}"><i class='fa fa-ban'>    </i> Error flash  </a></li>
                </ul>
            </li>
            <li >
                <a href="{{ route('admin.custommer.index')}}" title="{!! trans('general.left-sidebar.custommer') !!}"><i class='glyphicon glyphicon-user'></i> <span>{!! trans('general.left-sidebar.custommer') !!}</span></a>
            </li>
            <li class="treeview">
                <a href="#" ><i class='fa fa-cog'></i> <span>{!! trans('general.left-sidebar.admin') !!}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.audit.index') }}"><i class='fa fa-binoculars'> </i>  {!! trans('general.left-sidebar.audit') !!}   </a></li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-user-secret'></i> <span> {!! trans('general.left-sidebar.security') !!}</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.users.index')       }}"><i class='fa fa-user'> </i> {!! trans('general.left-sidebar.users') !!} </a></li>
                            <li><a href="{{ route('admin.roles.index')       }}"><i class='fa fa-users'></i> {!! trans('general.left-sidebar.roles') !!}      </a></li>
                            <li><a href="{{ route('admin.permissions.index') }}"><i class='fa fa-bolt'> </i> {!! trans('general.left-sidebar.permission') !!}</a></li>
                            <li><a href="{{ route('admin.routes.index')      }}"><i class='fa fa-road'> </i> {!! trans('general.left-sidebar.router') !!}    </a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('flash_test_warning')     }}"><i class='fa fa-cogs'> </i> {!! trans('general.left-sidebar.settings') !!}   </a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
