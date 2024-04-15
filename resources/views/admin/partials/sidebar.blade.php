<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('dashboard')}}">
            <img src="{{asset('user/assets/images/logo.jpg' )}}" width="50px" height="50px" alt="" class="light-logo"> &nbsp; P.I
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="  " class="dropdown-toggle no-arrow">
                        <span class="micon icon-copy fa fa-dashboard"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon icon-copy fa fa-group"></span><span class="mtext">Articles</span>
                        </a>
                        <ul class="submenu">
                            
                            <li><a href="{{ route('posts.create') }}">Nouveau</a></li>                     
                            
                            <li><a href="{{ route('posts.index') }}">Liste</a></li>    
                        </ul>
                    </li>
                </ul>
                <li>
                    <a href="{{ route('categories.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon icon-copy fa fa-folder"></span><span class="mtext">Catégories</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>