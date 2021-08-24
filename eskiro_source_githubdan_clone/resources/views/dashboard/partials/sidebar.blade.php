 <!-- Sidebar -->
 <div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title">
                     <span>Main</span>
                 </li>
                 <li class="submenu">
                     <a href="#" class="noti-dot">
                         <i class="la la-dashboard"></i>
                         <span> Dashboard</span> <span class="menu-arrow"></span>
                     </a>
                     <ul style="display: none;">
                         <li><a class="active" href="{{ route('home') }}">Admin Dashboard</a></li>
                         <li><a href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>

                     </ul>
                 </li>
                 @if (Auth::user()->role_name == 'Admin')
                     <li class="menu-title"> <span>Authentication</span> </li>
                     <li class="submenu">
                         <a href="#">
                             <i class="la la-user-secret"></i> <span> User Controller</span> <span
                                 class="menu-arrow"></span>
                         </a>
                         <ul style="display: none;">
                             <li><a href="{{ route('userManagement') }}">All User</a></li>
                             <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                             <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                         </ul>
                     </li>
                 @endif

             </ul>
         </div>
     </div>
 </div>
 <!-- /Sidebar -->
