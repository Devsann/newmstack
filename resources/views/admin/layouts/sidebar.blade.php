
<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ asset('/admin/img/ui-sam.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Admin Places <span class="caret"></span></span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('post.index') }}">Posts</a></li>
              <li><a href="{{ route('category.index') }}">Categories</a></li>
              <li><a href="{{ route('tag.index') }}">Tags</a></li>
              <li><a href="{{ route('user.index') }}">Users</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->