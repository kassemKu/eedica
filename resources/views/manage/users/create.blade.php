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
        <a href="{{ route('users.index') }}">
          ادارة المستخدمين
        </a>
      </li>
      <li class="uk-disabled uk-text-small">
        <a href="#">
          اضافة مستخدم جديد
        </a>
      </li>
    </ul>
  </div>
</div>

<div class="uk-container uk-padding" id="createUser">
  <div class="uk-background-default ee-border">
    
    <form action="{{ route('users.store') }}" class="uk-padding" method="POST">
      @csrf
      <fieldset class="uk-fieldset">
        
        <legend class="uk-legend uk-text-muted">بيانات المستخدم</legend>
        
        <div class="uk-margin uk-grid-small uk-child-width-1-2@s" uk-grid>
          <div>
            <label class="uk-form-label uk-text-primary {{ $errors->has('name') ? ' uk-text-danger' : '' }}">
              الاسم
            </label>
            <div class="uk-width-1-1 uk-inline">
              <span class="uk-form-icon uk-background-muted ee-border uk-border-rounded uk-text-primary {{ $errors->has('name') ? ' uk-text-danger' : '' }}" uk-icon="icon: user">
              </span>
              <input
              id="name"
              type="name"
              class="uk-input uk-border-rounded
              {{ $errors->has('name') ? ' uk-form-danger' : '' }}"
              name="name"
              value="{{ old('name') }}"
              placeholder="الاسم"
              required autofocus>
            </div>
            @if ($errors->has('name'))
            <span class="uk-text-small uk-text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>{{-- Namel --}}

          <div>
            <label class="uk-form-label uk-text-primary {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
              البريد الالكتروني
            </label>
            <div class="uk-width-1-1 uk-inline">
              <span class="uk-form-icon uk-background-muted ee-border uk-border-rounded uk-text-primary {{ $errors->has('email') ? ' uk-text-danger ee-border-red' : '' }}" uk-icon="icon: mail">
              </span>
              <input
                id="email"
                type="email"
                class="uk-input ee-en uk-border-rounded
                {{ $errors->has('email') ? ' ee-border-red' : '' }}"
                name="email"
                value="{{ old('email') }}"
                placeholder="Example@app.com"
                required autofocus
              >
            </div>
            @if ($errors->has('email'))
            <span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>{{-- Email --}}
        </div>{{-- Grid Name && Email --}}

        <div class="uk-margin uk-width-1-2">
          <label class="uk-form-label uk-text-primary {{ $errors->has('password') ? ' uk-text-danger' : '' }}">
            كلمة المرور 
          </label>
          <div class="uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded
            {{ $errors->has('password') ? ' uk-text-danger' : '' }}"
              uk-icon="icon: lock">
            </span>
            <input
              id="password"
              type="password"
              class="uk-input uk-border-rounded
              {{ $errors->has('password') ? ' uk-form-danger' : '' }}"
              name="password"
              placeholder="أدخل كلمة المرور"
            >
          </div>
          @if ($errors->has('password'))
          <span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
          @endif
        </div> {{-- Password --}}

        <div class="uk-margin-medium-top">
          <label for="roles" class="uk-form-label uk-text-danger">
            اختر التصاريح لهذا المستخدم
          </label>
          <div class="uk-column-1-3">
            <label>
              @foreach($roles as $role)
              <ul class="uk-list">
                <li class="ee-en">
                  <input class="uk-checkbox uk-margin-small-left" type="checkbox"
                  :value="{{ $role->id }}"
                  v-model="rolesSelected">
                  {{ $role->name }}
                </li>
              </ul>
              @endforeach
            </label>
          </div>
          <input
            id="roles"
            type="hidden"
            class="uk-input"
            name="roles"
            :value="rolesSelected"
          >
          {{-- Hiden Input For Send Value To Users Controller  --}}
        </div>

        <div class="uk-margin-small-left">
          <button
          type="submit"
          class="uk-button uk-button-default ee-border-blue uk-border-rounded uk-width-1-1 uk-margin-top">
          اضافة المستخدم
        </button>
      </div>
      
    </fieldset>
  </form>
  
</div>
</div>
@endsection