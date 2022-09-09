<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" id = "btn_profile"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
    <li class="" ><a title="" href="{{ url('/logout')}}"><i class="icon icon-off"></i> <span class="text">Logout</span></a></li>
    <li class=""><a title="" ><i class="icon icon-leaf"></i> <span class="text">Hi !</span> {{ $user_info['name']}}</a></li>
  </ul>
</div>


