<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ asset('assets')}}/images/marobi.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>Mabi</h2>

    </div>
</div>
<!-- /menu profile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{route('admin_category')}}"><i class="fa fa-home"></i> Category </a>
            </li>
            <li><a href="{{route('admin_transfer')}}"><i class="fa fa-clone"></i> Products  </a>
            </li>
            <li><a href="{{route('admin_message')}}"><i class="fa fa-clone"></i> Contact Messages  </a>
            </li>
            <li><a href="{{route('admin_faq')}}"><i class="fa fa-edit"></i> FAQ </span></a>

            </li>
            <li><a  href="{{route('admin_setting')}}"><i class="fa fa-desktop"></i> Settings </span></a>



            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
