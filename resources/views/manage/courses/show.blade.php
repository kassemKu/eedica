@extends('manage.layouts.app')

@section('title', $course->title)
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">تفاصيل الدورة</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li>
        <a href="{{ route('courses.index') }}" class="uk-text-small">ادارة الدورات</a>
      </li>
      <li class="uk-disabled uk-text-small">
        <a href="#" class="uk-disabled uk-text-small ee-en">{{ $course->title }}</a>
      </li>
    </ul>
  </div>
</div>

{{-- <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ $course_img }}" uk-img>
  <h1>Background Image</h1>
</div> --}}

<div class="uk-container uk-padding">
  <article class="uk-article">

    <h1 class="uk-article-title">
      <a class="uk-link-reset ee-en" href="#">{{ $course->title }}</a>
    </h1>

    <p class="uk-article-meta">تأليف الأستاذ:
      <a href="{{ route('users.show', $teacher->id) }}" class="uk-text-primary ee-en">{{ $teacher->name }}</a>
      <span class="uk-margin-right">تم النشر يتاريخ:
        <span class="ee-en uk-text-primary">{{ $course->created_at->toFormattedDateString() }}</span>
      </span>
      @if($course->publish > 0)
        <span class="uk-margin-right uk-text-success">الدورة في النشر</span>
      @else
        <span class="uk-margin-right uk-text-danger">الدورة لم تنشر بعد</span>
      @endif
      @if($course->free_course)
        <span class="uk-margin-right uk-label uk-background-muted ee-border uk-text-success">دورة مجانية</span>
      @else
        <span class="uk-margin-right">ثمن الدورة: </span>
        <span class="uk-label uk-background-muted ee-border ee-en uk-text-danger">{{ $course->price }} $</span>
      @endif
    </p>

    <p class="uk-text-lead uk-margin-large">{{ $course->description }}</p>

    {{-- <h4 class="uk-text-muted">دروس الدورة</h4>
    <div class="uk-child-width-1-3@s" uk-grid>
      @foreach($course->lessons as $lesson)
      <div>
        <div class="uk-panel uk-background-default uk-padding-small ee-border">
          <span class="uk-position-absolute uk-label ee-en"  style="left: 10px; top: 10px">
            {{ $loop->iteration }}
          </span>
          <h4 class="uk-margin-top ee-en">{{ $lesson->title }}</h4>
          <p class="uk-text-small ee-en">{{ $lesson->description }}</p>
          <div class="uk-child-width-auto" uk-grid>
            <a href="{{ route('lesson.show', $lesson->slug) }}" class="uk-text-small">
              <span uk-icon="arrow-left"></span>
              المزيد من التفاصيل
            </a>
            @if($lesson->publish === 0)
            <span class="uk-label ee-border uk-label-danger uk-text-small">غير منشور</span>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div> --}}
  </article>
</div>
@endsection
