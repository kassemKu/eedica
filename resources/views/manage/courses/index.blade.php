@extends('manage.layouts.app')

@section('title', 'manage courses')
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">ادارة الدورات</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-disabled uk-text-small">لوحة التحكم</li>
      <li class="uk-disabled uk-text-small">ادارة الدورات</li>
    </ul>
  </div>
</div>

<div class="uk-container uk-margin-medium uk-margin-medium-bottom">
  <div class="uk-overflow-auto uk-background-default ee-border">
    <div class="uk-grid-large uk-child-width-1-2 uk-padding-small" uk-grid>
      <div>
        <h4>فلترة نتائج البحث</h4>
        <p class="uk-text-small uk-text-muted">
          يمكن فلترة ابحث في الدورات بحسب عنوان الدورة
        </p>
        <input class="uk-input uk-width-3-4 uk-border-rounded" type="text" placeholder="أدخل اسم المستخدم هنا">
      </div>
      <div class="uk-margin-small-top uk-text-left">
        <a href="{{ route('courses.create') }}" class="uk-button uk-button-default uk-border-rounded">
          <span uk-icon="icon: plus" class="uk-margin-small-left"></span>
          أضف دورة جديدة
        </a>
      </div>
    </div>

    <table class="uk-table uk-table-hover uk-table-divider">
      <thead>
        <tr>
          <th class="uk-table-shrink">ID</th>
          <th class="uk-table-shrin">عنوان الدورة</th>
          <th class="uk-table-shrin">مدرس الدورة</th>
          <th class="uk-table-shrin">نشر الدورة</th>
          <th>تاريخ التسجيل</th>
          <th>المهام</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $course)
        <tr class="uk-text-small">
          <td class="uk-text-primary ee-en">{{ $course->id }}</td>
          <td class="ee-en">{{ $course->title }}</td>
          <td class="ee-en">
            <a href="#" class="uk-label uk-background-muted ee-border uk-text-muted ee-en">
              {{ $course->user->name }}
            </a>
          </td>
          <td>
              @if($course->publish > 0)
              <span class="uk-label uk-label-success ee-border">
                الدورة في النشر
              </span>
              @else
              <span class="uk-label uk-background-muted ee-border uk-text-muted">
                الدورة لم تنشر بعد
              </span>
              @endif
          </td>
          <td  class="ee-en">{{ $course->created_at }}</td>
          <td>
            <a href="#" class="uk-label uk-background-default ee-border uk-text-muted">
              تعديل
            </a>
            <a href="{{ route('courses.show', $course->id) }}" class="uk-label uk-background-default ee-border ee-border-blue uk-text-primary">
              عرض
            </a>
            <a class="uk-label uk-background-default ee-border ee-border-red uk-text-danger">حذف</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
