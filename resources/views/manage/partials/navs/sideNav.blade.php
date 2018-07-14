<aside class="uk-background-secondary uk-light ee-border-left" uk-height-viewport>
  <div class="uk-padding-small uk-text-center">
    <h2 class="uk-margin-top">
      أي أيديكا
      <small class="uk-text-small uk-text-muted">التعليمية</small>
    </h2>
    
    <div class="uk-flex uk-flex-column uk-flex-middle uk-flex-center">
      <div>
        <ul class="uk-iconnav uk-margin-remove">
          <li><a href="#" uk-icon="icon: mail; ratio: 0.80" uk-tooltip="الايميل"></a></li>
          <li><a href="#" uk-icon="icon: bell; ratio: 0.90" uk-tooltip="التنبيهات"></a></li>
          <li>
            <a href="{{ route('logout') }}" uk-icon="icon: sign-out; ratio: 0.90" uk-tooltip="تسجيل خروج" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            </a>
          </li>
        </ul>
      </div>
    </div>
    
    <div class="uk-width-1-1 uk-padding-small uk-padding-remove-horizontal">
      <ul class="uk-nav uk-nav-default">
        <li class="uk-nav-header">لوحة التحكم</li>
        <li>
          <a href="#" 
          class="{{ Request::path() === 'manage/dashboard' ? ' uk-text-warning' : '' }}">
            <span uk-icon="icon: cog; ratio: 1"></span>
            <span>الاعدادات العامة</span>
          </a>
        </li>
        @role(['superadministrator', 'administrator'])
        <li>
          <a href="{{ route('users.index') }}"
          class="{{ Request::path() === 'manage/users' ? 'uk-text-warning' : '' }}">
            <span uk-icon="icon: users; ratio: 1"></span>
            <span>ادارة المستخدمين</span>
          </a>
        </li>
        @endrole
        <li>
          <a href="{{ route('courses.index') }}"
          class="{{ Request::path() === 'manage/courses' ? 'uk-text-warning' : '' }}">
            <span uk-icon="icon: calendar; ratio: 1"></span>
            <span>ادارة الدورات</span>
          </a>
        </li>
        <li>
          <a href="#"
          class="{{ Request::path() == 'manage/lessons' ? 'uk-text-warning' : '' }}">
            <span uk-icon="icon: settings; ratio: 1" class="uk-float-center"></span>
            <span>ادارة الدروس</span>
          </a>
        </li>
        <li class="uk-nav-header uk-margin-remove">الأذونات والتصاريح</li>
        <li>
          <a href="{{ route('roles.index') }}"
          class="{{ Request::path() === 'manage/roles' ? 'uk-text-warning' : '' }}">
            <span uk-icon="icon: lock; ratio: 1"></span>
            <span >التصاريح</span>
          </a>
        </li>
        <li>
          <a href="#"
          class="{{ Request::path() === 'manage/permissions' ? 'uk-text-warning' : '' }}">
            <span uk-icon="icon: unlock; ratio: 1"></span>
            <span >الأذونات</span>
          </a>
        </li>
        <li class="uk-nav-divider"></li>
        <li>
          <a href="{{ route('home') }}">
            <span uk-icon="arrow-left" class="uk-text-danger"></span>
            العودة الى اصفحة الرئيسة
          </a>
        </li>
      </ul>
    </div>
    
  </div>
</aside>