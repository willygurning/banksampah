<div class="navbar-fixed">
<nav class="white">
    <div class="nav-wrapper ">
    <ul class="left hide-on-med-and-down">
      <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large button-collapse btn waves-effect waves-light green lighten-3" ><i class="material-icons">menu</i></a>
      <a href="{{ route('homepage') }}" class="brand-logo gambar"><img width="60px" height="60px" src="image/11.png" alt=""> </a>
    </ul>
      
      <ul class="right hide-on-med-and-down">
        @guest
          <li><a href= "{{ route('register') }}">TENTANG</a></li>
          <li><a href= "{{ route('login') }}">Masuk</a></li>
          <li><a href= "{{ route('register') }}"><i class="large material-icons">add_shopping_cart</i></a></li>
          

          @else
          <ul id="dropdown1" class ="dropdown-content">
              <li>
                <a href="{{ route('home') }}">Home</a>
              </li>

            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
          <li><a href="#" class="dropdown-trigger" data-target="dropdown1">{{ auth()->user()->name }}</a></li>

        @endguest
      </ul> 
    </div>
</nav>
</div>

<ul class="sidenav green darken-3" id="slide-out" >
    <li><div class="user-view">
      <a href="#user"><img class="circle" src="image/slide1.jpg"></a>
      <a href="#name"><span class="black-text name center">user</span></a>
    </div></li>
    <li>
    <a class="waves-effect waves-light btn">Kupon Saya</a>
    </li>
    <li>
    <a class="waves-effect waves-light white black-text btn">Points</a>
    </li>
    
    <div class="white">
      <li></li>
      <li><a class="subheader">Menu</a></li>
      <li><div class="divider"></div></li>
      <li><a href="#!"><i class="small material-icons">home</i>Beranda</a></li>
      <li><a href="#!"><i class="small material-icons">person</i>Profil</a></li>
      <li><a href="#!"><i class="small material-icons">history</i>Riwayat</a></li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="#!"></a></li>
    </div>
    
  </ul>
</div>