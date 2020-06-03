
@can('view_users')
<li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
    <a class="waves-effect waves-dark" href="{!! route('admin.users.index') !!}">
        <i class="nav-icon fa fa-user-circle"></i>
        <span class="hide-menu">@lang('backend.Users')</span>
    </a>
</li>
@endcan

@can('view_roles')
<li class="nav-item {{ Request::is('admin/roles*') ? 'active' : '' }}">
    <a class="waves-effect waves-dark" href="{!! route('admin.roles.index') !!}">
        <i class="nav-icon fa fa-list"></i>
        <span class="hide-menu">@lang('backend.Roles')</span>
    </a>
</li>
@endcan

@can('view_categories')
<li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
    <a href="{!! route('admin.categories.index') !!}"><i class="fa fa-edit"></i><span>@lang('backend.Categories')</span></a>
</li>
@endcan


@can('view_country')
<li class="{{ Request::is('admin/countries*') ? 'active' : '' }}">
    <a href="{{ route('admin.countries.index') }}"><i class="fa fa-edit"></i><span>@lang('models/countries.plural')</span></a>
</li>
@endcan


