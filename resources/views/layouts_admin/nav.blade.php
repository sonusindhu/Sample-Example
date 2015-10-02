<!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper">
                    <div class="sidebar-toggler">
                    </div>
                </li>
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                           
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li @if(!isset(Request::segments()[1])) class="start active open" @endif>
                    <a href="/admin">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='users') class="start active open" @endif>
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span class="title">Users</span>
                        @if(isset(Request::segments()[1]) && Request::segments()[1]=='users')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                        @else
                        <span class="arrow"></span>
                        @endif
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/users">
                                <i class="icon-users"></i>
                                Manage Users</a>
                        </li>
                        <li>
                            <a href="/admin/users/add">
                                <i class="icon-user-follow"></i>
                                Add Users</a>
                        </li>
                    </ul>
                </li>
                
                <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='ads') class="start active open" @endif>
                    <a href="javascript:;">
                        <i class="icon-rocket"></i>
                        <span class="title">ADS Management</span>
                        @if(isset(Request::segments()[1]) && Request::segments()[1]=='ads')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                        @else
                        <span class="arrow"></span>
                        @endif
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/ads">
                                Manage All</a>
                        </li>
                        <li>
                            <a href="/admin/ads/edit/top">
                                Top Ad</a>
                        </li>
                        <li>
                            <a href="/admin/ads/edit/left">
                                Left Side Ad</a>
                        </li>
                        <li>
                            <a href="/admin/ads/edit/right">
                                Right Side Ad</a>
                        </li>
                        <li>
                            <a href="/admin/ads/edit/bottom">
                                Bottom Ad</a>
                        </li>
                    </ul>
                </li>
                
                
                
                <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='faqs') class="start active open" @endif>
                    <a href="javascript:;">
                        <i class="icon-puzzle"></i>
                        <span class="title">FAQ Management</span>
                        @if(isset(Request::segments()[1]) && Request::segments()[1]=='faqs')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                        @else
                        <span class="arrow"></span>
                        @endif
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/faqs">
                                Manage FAQs</a>
                        </li>
                        <li>
                            <a href="/admin/faqs/add">
                                Add FAQ</a>
                        </li>
                    </ul>
                </li>
                
                
                <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='videos') class="start active open" @endif>
                    <a href="javascript:;">
                        <i class="icon-settings"></i>
                        <span class="title">Videos Management</span>
                        @if(isset(Request::segments()[1]) && Request::segments()[1]=='videos')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                        @else
                        <span class="arrow"></span>
                        @endif
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/videos">
                                Manage Videos</a>
                        </li>
                        <li>
                            <a href="/admin/videos/add">
                                Add Videos</a>
                        </li>
                    </ul>
                </li>
                
                
                 <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='posts') class="start active open" @endif>
                    <a href="javascript:;">
                        <i class="icon-briefcase"></i>
                        <span class="title">Blog Management</span>
                        @if(isset(Request::segments()[1]) && Request::segments()[1]=='posts')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                        @else
                        <span class="arrow"></span>
                        @endif
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/posts">
                                Manage Blog</a>
                        </li>
                        <li>
                            <a href="/admin/posts/add">
                                Add Blog</a>
                        </li>
                    </ul>
                </li>
                
                
                <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='contacts') class="start active open" @endif>
                    <a href="/admin/contacts">
                        <i class="icon-diamond"></i>
                        <span class="title">Manage Contact</span>
                        <span class="arrow "></span>
                    </a>
                </li>
                
                
                 <li @if(isset(Request::segments()[1]) && Request::segments()[1]=='profile') class="start active open" @endif>
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span class="title">Settings</span>
                        @if(isset(Request::segments()[1]) && Request::segments()[1]=='profile')
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                        @else
                        <span class="arrow"></span>
                        @endif
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/profile">
                                Edit Profile</a>
                        </li>
                        <li>
                            <a href="/admin/profile/password">
                                Change Password</a>
                        </li>
                    </ul>
                </li>
              
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->