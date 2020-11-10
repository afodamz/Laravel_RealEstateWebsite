<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
  <div class="navbar-wrapper">
    <a href="#" class="site-logo"><img src="{{ url ('assets/img/logo.jpg') }}" alt=""></a>
    </div>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <p>{{ __('Profile Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <!-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li> -->
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">Request_List</i>
            <p>{{ __('Request List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">Send_Mail</i>
            <p>{{ __('Send Mail') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'upload' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upload') }}">
          <i class="material-icons">Upload_Properties</i>
          <p>{{ __('Upload Properties') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'uploadblog' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('uploadblog') }}">
          <i class="material-icons">Upload_Blog</i>
          <p>{{ __('Upload Blog') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>