@extends('manage.layouts.app')

@section('title', $user->name)
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary ee-en">{{ $user->name }}</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li>
        <a href="{{ route('users.index') }}" class="uk-text-small">
          ادارة المستخدمين
        </a>
      </li>
      <li>
        <a href="#" class="uk-disabled uk-text-small ee-en">
          {{ $user->name }}
        </a>
      </li>
    </ul>
  </div>
</div>

<div class="uk-container uk-padding">
  <div class="uk-flex">
    <div class="uk-background-default ee-border uk-width-1-3 uk-margin-left uk-padding-small uk-text-center">
      <h3 class="ee-en">
        {{ $user->name }}
        @foreach($user->roles as $role)
          <small class="uk-text-small uk-text-muted">{{ $role->name }}</small>
        @endforeach
      </h3>
      <img src="{{ $user->getFirstMediaUrl('avatar', 'card') }}" alt="" width="100" height="100" class="uk-border-circle ee-border">
      <div class="uk-flex uk-flex-center">
        <ul class="uk-iconnav uk-padding-small">
          <li>
            <a href="#" uk-icon="icon: mail; ratio: 1" uk-tooltip="الايميل"></a>
          </li>
          <li>
            <a href="#" uk-icon="icon: comments; ratio: 1" uk-tooltip="التنبيهات"></a>
          </li>
        </ul>
      </div>
      <div>
          <ul class="uk-list uk-text-right uk-text-small  uk-list-striped">
            <li>
              <span>الاسم: </span>
              <span class="ee-en uk-margin-small-right">{{ $user->name }}</span>
            </li>
            <li>
              <span>البريد الالكتروني: </span>
              <span class="ee-en uk-margin-small-right">{{ $user->email }}</span>
            </li>
            <li>
              <span>التصاريح: </span>
              @foreach($user->roles as $role)
              <span class="uk-label uk-background-muted ee-border uk-text-muted ee-en uk-text-capitalize uk-margin-small-right">
                {{ $role->name }}
              </span>
              @endforeach
            </li>
          </ul>
      </div>
    </div>

    <div class="uk-background-default ee-border uk-width-2-3 uk-margin-right">2</div>
  </div>
    
</div>
@endsection