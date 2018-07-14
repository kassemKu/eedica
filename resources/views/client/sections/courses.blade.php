<div class="ee-courses uk-container uk-margin-xlarge-top">
  <div class="uk-text-center">
    <h1 class="ee-light uk-margin-large-bottom">دورات أي ايديكا</h1>
  </div>
  <div class="uk-grid-small uk-grid-match uk-child-width-1-4@m" uk-grid>

    @foreach($courses as $course)
    <div>
      <div class="uk-card uk-card-small uk-card-body uk-box-shadow-large uk-border-rounded
      uk-light ee-background-blue">
        @if($course->free_course || !$course->price)
        <div class="uk-card-badge uk-label uk-text-danger">مجانا</div>
        @endif
        <h5 class="ee-en uk-text-center {{ $course->free_course ? ' uk-margin-top' : '' }}">
          {{ $course->title }}
        </h5>
        <p>
          <span class="uk-margin-small-left">مدرس الدورة:</span>
          <span class="ee-en">{{ $course->user->name  }}</span>
        </p>
        <p>
          <span class="uk-margin-small-left">الدولة:</span>
          <span>المملكة العربية السعودية</span> 
        </p>
        @if($course->price)
        <p>
          <span class="uk-margin-small-left">ثمن الدورة:</span>
          <code class="ee-en uk-text-warning uk-border-rounded uk-text-bold">
            {{ $course->price }}<span uk-icon="icon: strikethrough;" class="uk-margin-small-bottom"></span>
          </code>
          </span>
        </p>
        @endif
        <p class="uk-inline">
          <ul class="uk-iconnav uk-text-warning">
            <li><a href=""><span class="uk-margin-small-left">تقيمكم:</span></a></li>
            <li><a href="#" class="uk-text-warning" uk-icon="icon: star"></a></li>
            <li><a href="#" class="uk-text-warning" uk-icon="icon: star"></a></li>
            <li><a href="#" class="uk-text-warning" uk-icon="icon: star"></a></li>
            <li><a href="#" class="uk-text-warning" uk-icon="icon: star"></a></li>
          </ul>
        </p>
        <div class="uk-text-center">
          <a href="#">
            <span uk-icon="icon: arrow-left; ratio: 1.5;" class="uk-text-danger uk-text-bold"></span>
            تفاصيل الدورة
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>