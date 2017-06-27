 <header class="main-header navbar-fixed-top">
    <!-- Logo -->
    <a href="{{ url('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        
        <img src="{{ asset('sximo/images/logo.png') }}" title="{{ $sximoconfig['cnf_appname'] }}" height="30" width="30" />
               
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
    
        @if(file_exists(public_path().'/sximo/images/'.$sximoconfig['cnf_logo']) && $sximoconfig['cnf_logo'] !='')
        <img src="{{ asset('sximo/images/'.$sximoconfig['cnf_logo'])}}" alt="{{ $sximoconfig['cnf_appname'] }}"  />
        @else
        <img src="{{ asset('sximo/images/logo.png')}}" alt="{{ $sximoconfig['cnf_appname'] }}"  />
        @endif 
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Навигация</span>
      </a>
      <a href="{{ url('')}}" target="_blank" class="sidebar-all hidden-xs"  title="Перейти к сайту">
       <span ><i class="fa fa-globe"></i></span>
      </a>
      @if(Auth::user()->group_id == 1  )
      <a href="javascript:void(0)" class="sidebar-all hidden-xs"  onclick="$('#topbar-dropmenu').toggle();">
        <span ><i class="fa fa-desktop"></i></span>
      </a>
      @endif
      <a href="javascript:void(0)" class="sidebar-all hidden-xs"  onclick="requestFullScreen()">
        <span ><i class="fa fa-arrows-alt"></i> </span>

      </a>
     

        

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">У Вас <span class="notif-alert" style="font-weight: 600">0</span> уведомлений</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="notification-menu">
                  
                </ul>  
              <li class="footer"><a href="{{ url('notification')}}">Посмотреть все</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->

       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {!! SiteHelpers::avatar( 19 ) !!}
                <span class="hidden-xs">{{ Session::get('fid')}}
                  <i class="fa caret"></i>
                </span>              
            </a>

            <ul class="dropdown-menu">
              <li class="header">
                
                <b> {{ Lang::get('core.lastlogin') }} : </b> {{ date("H:i ,M/d/y", strtotime(Session::get('ll'))) }}
              </li>
              <li>
                  <li><a href="{{ url('user/profile')}}"><i class="fa fa-user"></i> Мой профиль  </a></li>
                  @if(session('gid') =='1')
                  <li><a href="{{ url('core/elfinder')}}"><i class="fa fa-folder"></i> Мои файлы   </a></li>
                  @endif
                  <li><a href="{{ url('user/logout')}}"><i class="fa fa-sign-out"></i> Выйти  </a></li>
              </li>
                <!-- search form -->
                
                 <?php
                 $templates = array(

                    'skin-blue'        => 'Blue',
                    'skin-black'       => 'Black',
                    'skin-purple'      => 'Purple',
                    'skin-green'       => 'Green',
                    'skin-red'         => 'Red',
                    'skin-yellow'      => 'Yellow',
                    'skin-blue-light'   => 'Blue Light',
                    'skin-black-light'  => 'Black Light',
                    'skin-purple-light' => 'Purple Light',
                    'skin-green-light'  => 'Green Light',
                    'skin-red-light'    => 'Red Light',
                    'skin-yellow-light' => 'Yellow Light',


                  );
                 ?>
              
                 
                     
            </ul>

          </li>


        </ul>
      </div>
    </nav>
  </header>