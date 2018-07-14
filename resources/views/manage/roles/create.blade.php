@extends('manage.layouts.app')

@section('title', 'Create User')
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">اضافة مستخدم</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-text-small">
        <a href="{{ route('roles.index') }}">
          ادارة التصاريح
        </a>
      </li>
      <li class="uk-disabled uk-text-small">
        <a href="#">
          اضافة تصريح جديد
        </a>
      </li>
    </ul>
  </div>
</div>

<div class="uk-container uk-padding" id="createUser">
  <div class="uk-background-default ee-border">
    
    <form action="{{ route('roles.store') }}" class="uk-padding" method="POST">
      @csrf
      <fieldset class="uk-fieldset">
        
        <legend class="uk-legend uk-text-muted">بيانات المستخدم</legend>
        
        <div class="uk-margin uk-grid-small uk-child-width-1-2@s" uk-grid>
          <div>
            <label class="uk-form-label uk-text-primary {{ $errors->has('name') ? ' uk-text-danger' : '' }}">
              الاسم
            </label>
            <div class="uk-width-1-1 uk-inline">
              <span class="uk-form-icon uk-background-muted ee-border uk-border-rounded uk-text-primary {{ $errors->has('name') ? ' uk-text-danger' : '' }}" uk-icon="icon: pencil; ratio: 1.1">
              </span>
              <input
              id="name"
              type="name"
              class="uk-input uk-border-rounded
              {{ $errors->has('name') ? ' uk-form-danger' : '' }}"
              name="name"
              value="{{ old('name') }}"
              placeholder="الاسم"
              value="{{ old('name') }}"
              required autofocus>
            </div>
            @if ($errors->has('name'))
            <span class="uk-text-small uk-text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>{{-- Namel --}}

          <div>
            <label class="uk-form-label uk-text-primary">
              الاسم المستخدم
            </label>
            <div class="uk-width-1-1 uk-inline">
              <span class="uk-form-icon uk-background-muted ee-border uk-border-rounded uk-text-primary {{ $errors->has('display_name') ? ' uk-text-danger ee-border-red' : '' }}" uk-icon="icon: tag">
              </span>
              <input
                id="display_name"
                type="text"
                class="uk-input ee-en uk-border-rounded"
                name="display_name"
                value="{{ old('display_name') }}"
                autofocus
              >
            </div>
          </div>
        </div>

        <div class="uk-margin">
          <label class="uk-form-label uk-text-primary">
            الوصف
          </label>
          <textarea class="uk-textarea uk-border-rounded" rows="5" name="description"
          placeholder="الوصف لا يزيد عن 255 محرف..."
          value="{{ old('description') }}">
          </textarea>
        </div>

        <div class="uk-margin-medium-top">
          <label for="roles" class="uk-form-label uk-text-danger">
            اختر الاذونات لهذا التصريح
          </label>
          <div class="uk-column-1-3">
            <label>
              @foreach($permissions as $permission)
              <ul class="uk-list">
                <li class="ee-en">
                  <input class="uk-checkbox uk-margin-small-left" type="checkbox"
                  :value="{{ $permission->id }}"
                  v-model="permissionsSelected">
                  {{ $permission->name }}
                </li>
              </ul>
              @endforeach
            </label>
          </div>
          <input
            id="roles"
            type="hidden"
            class="uk-input"
            name="permissions"
            :value="permissionsSelected"
          >
          {{-- Hiden Input For Send Value To Users Controller  --}}
        </div>

        <div class="uk-margin-small-left">
          <button
          type="submit"
          class="uk-button uk-button-default ee-border-blue uk-border-rounded uk-width-1-1 uk-margin-top">
          اضافة التصريح
        </button>
      </div>
      
    </fieldset>
  </form>
  
</div>
</div>
@endsection