<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-navbar-transparent; cls-inactive: uk-navbar-transparent;">
  
  <nav class="uk-navbar-container uk-background-secondary uk-light">
    <div class="uk-container uk-container-expand">
      <div uk-navbar>
        
        <div class="uk-navbar-right">
          <a href="/" class="uk-navbar-item uk-logo">
            <span class="uk-text-danger uk-margin-small-left" uk-icon="info"></span>
            أي أيديكا
          </a>
          <ul class="uk-navbar-nav">
            @auth()
            <li><a href="{{ route('home') }}">الرئيسة</a></li>
            @endauth
            @role(['administrator', 'superadministrator', 'editor', 'author', 'contributor', 'teacher'])
            <li><a href="{{ route('manage.dashboard') }}">لوحة التحكم</a></li>
            @endrole
            <li><a href="#">رابط هنا</a></li>
            <li><a href="#">كافة الدورات</a></li>
            <li><a href="#ee-services" ul-scroll>خدماتنا</a></li>
          </ul>
        </div>{{-- Nav Right --}}

        @auth
        <div class="uk-navbar-center">
          <div class="uk-navbar-item">
            <img src="{{ auth()->user()->getFirstMediaUrl('avatar', 'small') }}" alt="" class="uk-border-rounded" width="50" height="50">
          </div>
        </div>{{-- Navbar Center --}}
        @endauth

        <div class="uk-navbar-left">
          @guest()
          <div class="uk-navbar-item">
            <a href="{{ route('login') }}" class="uk-button uk-button-default ee-light uk-border-rounded ee-border ee-border-red">
              تسجيل دخول
            </a>
          </div>
          <div class="uk-navbar-item">
            <a href="{{ route('register') }}" class="uk-button uk-button-danger ee-light uk-border-rounded ee-border ee-border-red">
              حساب جديد
            </a>
          </div>
          @else
          <ul class="uk-navbar-nav">
            <li>
              <a href="#" class="ee-en">{{ auth()->user()->name }}</a>
              
              <div uk-dropdown="offset: 0">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li class="uk-active uk-text-uppercase">
                    <a href="{{ route('logout') }}" class="uk-text-background" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      تسجيل خروج
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('profile.show', auth()->user()->id) }}" class="uk-text-background">
                      الملف الشخصي
                    </a>
                  </li>
                </ul>
              </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
          @endguest
        {{-- <div class="uk-navbar-item">
          <a class="uk-navbar-toggle ee-light uk-text-large" href="#modal-full" uk-search-icon uk-toggle></a>
        </div>  Search Bar--}}
      </div>{{-- Nav Left --}}
      
    </div>
  </div>
</nav>
</div>
{{-- Search Model --}}
<div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
  <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
    <button class="uk-modal-close-full" type="button" uk-close></button>
    <form class="uk-search uk-search-large">
      <input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus>
    </form>
  </div>
</div>