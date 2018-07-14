@extends('manage.layouts.app')

@section('title', 'Create Courses')
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">اضافة دورة</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-disabled uk-text-small">ادارة الدورات</li>
      <li class="uk-disabled uk-text-small">اضافة دورة</li>
    </ul>
  </div>
</div>

<div class="uk-container uk-margin-medium uk-flex uk-flex-center" id="ee-create">
  <div class="uk-card uk-card-default uk-width-3-4@s ee-border">
    <form class="uk-form-stacked uk-padding" method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data" novalidate>
      @csrf
      
      <legend class="uk-legend uk-text-muted">اضافة دورة جديدة</legend>
      
      <div class="uk-flex uk-flex-center uk-grid-small uk-margin" uk-grid>
        <div class="uk-width-1-2@s">
          <label class="uk-form-label uk-text-primary {{ $errors->has('title') ? ' uk-text-danger' : '' }}">
            عنوان الدورة
          </label>
          <div class="uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded
            {{ $errors->has('title') ? ' uk-text-danger' : '' }}"
            uk-icon="icon: pencil">
            </span>
            <input
            id="title" type="text"
            v-model="courseTitle"
            class="uk-input uk-border-rounded
            {{ $errors->has('title') ? ' uk-form-danger' : '' }}"
            name="title"
            value="{{ old('title') }}"
            placeholder="عنوان الدورة"
            required autofocus>
          </div>
          @if ($errors->has('title'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('title') }}</span>
					@endif
        </div>{{-- Column Title --}}
        
        <div class="uk-width-1-2@s">
          <label class="uk-form-label uk-text-primary">
            رابط الدورة
          </label>
          <div class="uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded"
            uk-icon="icon: link">
            </span>
            <input
            id="title"
            type="text"
            class="uk-input uk-border-rounded"
            name="slug"
            :value="courseSlug(courseTitle)"
            placeholder="رابط الدورة">
          </div>
        </div>{{-- Column Slug --}}
      </div>{{-- Grid Title And Slug --}}
      
      <div class="uk-margin uk-margin-small-left">
        <label class="uk-form-label uk-text-primary">
          الوصف
        </label>
        <textarea class="uk-textarea uk-border-rounded" rows="5" name="description"
        placeholder="الوصف لا يزيد عن 255 محرف...">
        </textarea>
      </div>
    
      @role(['administrator', 'superadministrator'])
      <div class="uk-margin">
        <label class="uk-form-label uk-text-primary">
          مدرس الدورة
        </label>
        <div uk-form-custom="target: > * > span:first-child">
          <select name="teacher">
            <option value="">مدرس الدورة...</option>
            @foreach($teachers as $teacher)
            <option  value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
            <input type="hidden" name="sync_teacher">
          </select>
          <button class="uk-button uk-button-default" type="button" tabindex="-1">
            <span></span>
            <span uk-icon="icon: chevron-down"></span>
          </button>
        </div>
      </div>
      @endrole

      <div class="uk-margin uk-grid-small uk-child-width-1-2" uk-grid>
        <div>
          <div uk-form-custom="target: true">
              <label class="uk-form-label uk-text-primary">
                اختر صورة الدورة
              </label>
            <input type="file" name="course_img">
            <input class="uk-input" type="text" placeholder="اختر صورة" disabled>
          </div>
        </div>{{-- Course Image --}}

        <div>
          <label class="uk-form-label uk-text-primary">
            تاريخ ابتداء الدورة
          </label>
          <datepicker></datepicker>
        </div>{{-- Course Starat at --}}
      </div>{{-- Grid Course Starat at && Image --}}

      <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
        <label class="uk-text-primary">
          <input class="uk-radio" type="radio" name="radio2" value="price" v-model="checkPrice">
          دورة مدفوعة
        </label>
        <label class="uk-text-success">
          <input class="uk-radio" type="radio" name="free_course"
          value="free_course" v-model="checkPrice">
          دورة مجانية
        </label>
      </div>

      <div class="uk-margin" v-if="checkPrice === 'price'">
        <label class="uk-form-label">
          ثمن الدورة
        </label>
        <input class="uk-input uk-form-width-medium uk-border-rounded" type="text" name="price" placeholder="ثمن الدورة">
      </div>
    
      <div class="uk-margin">
        <label class="uk-text-small uk-text-primary">
          <input class="uk-checkbox" type="checkbox" name="publish">
          نشر الدورة
        </label>
      </div>
    
      <div>
        <button
        type="submit"
        class="uk-button uk-button-default ee-border-blue uk-width-1-1 uk-margin-top uk-border-rounded">
        اضافة الدورة
        </button>
      </div>

    </form>
  </div>
</div>
<div style="height: 4000px"></div>
@endsection
