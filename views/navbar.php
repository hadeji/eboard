<div class="navbar-fixed">
<nav class="blue darken-3">
  <div class="nav-wrapper">
    <div class="bcontainer">
    <a href="{{ @BASE }}" class="brand-logo">Acoustix</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi mdi-menu"></i></a>
    <ul class="right hide-on-med-and-down">
      <li class="waves-effect"><a href="{{ @BASE }}">Store</a></li>
      <li class="waves-effect"><a href="{{ @BASE }}/cart">Cart</a></li>
      <!-- Account Link -->

      <check if="{{ @SESSION.isLoggedIn == TRUE }}">
        <true>
          <li class="waves-effect"><a href="{{ @BASE }}/user/{{ @SESSION.userName }}">Account</a></li>
          <li class="waves-effect"><a href="{{ @BASE }}/{{ @SESSION.userName }}/logout">Logout</a></li>
        </true>
        <false>
          <li class="waves-effect"><a href="{{ @BASE }}/login">Login</a></li>
          <li class="waves-effect"><a href="{{ @BASE }}/register">Register</a></li>
        </false>
      </check>

      <!-- Account Link -->
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li class="waves-effect"><a href="{{ @BASE }}">Store</a></li>
      <li class="waves-effect"><a href="{{ @BASE }}/cart">Cart</a></li>
      <check if="{{ @SESSION.isLoggedIn == TRUE }}">
        <true>
          <li class="waves-effect"><a href="{{ @BASE }}/user/{{ @SESSION.userName }}">Account</a></li>
          <li class="waves-effect"><a href="{{ @BASE }}/{{ @SESSION.userName }}/logout">Logout</a></li>
        </true>
        <false>
          <li class="waves-effect"><a href="{{ @BASE }}/login">Login</a></li>
          <li class="waves-effect"><a href="{{ @BASE }}/register">Register</a></li>
        </false>
      </check>
    </ul>
    </div>
  </div>
  <check if="{{ @page == 'home' }}">
      <true>
        <ul class="tabs blue darken-3">
          <li class="tab col s12">
            <a class="active white-text" href="#guitars">Guitars</a>
          </li>
          <li class="tab col s12">
            <a class="white-text" href="#basses">Basses</a>
          </li>
          <li class="tab col s12">
            <a class="white-text" href="#drums">Drums</a>
          </li>
          <li class="tab col s12">
            <a class="white-text" href="#tshirts">Tshirts</a>
          </li>
           <li class="tab col s12">
            <a class="white-text" href="#smartphones">Smartphones</a>
          </li>
        </ul>
      </true>
    </check>
</nav>
</div>