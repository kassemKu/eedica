@extends('manage.layouts.app')

@section('title', $role->name)
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary ee-en">{{ $role->name }}</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li>
        <a href="{{ route('roles.index') }}" class="uk-text-small">
          ادارة التصاريح
        </a>
      </li>
      <li>
        <a href="#" class="uk-disabled uk-text-small ee-en">
          {{ $role->name }}
        </a>
      </li>
    </ul>
  </div>
</div>

<div class="uk-container uk-flex uk-flex-center uk-padding">
    <div class="uk-background-default ee-border uk-width-2-3@s uk-padding">
      <h3 class="ee-en">
        {{ $role->name }}
      </h3>
      <div>
          <ul class="uk-list uk-text-right uk-text-small  uk-list-striped">
            <li>
              <span>اسم التصريح: </span>
              <span class="ee-en uk-margin-small-right">{{ $role->name }}</span>
            </li>
            <li>
              <span>الاسم المستخدم: </span>
              <span class="ee-en uk-margin-small-right">{{ $role->display_name }}</span>
            </li>
            <li>
              <span>الوصف : </span>
              <span class="ee-en uk-margin-small-right">{{ $role->description }}</span>
            </li>
            <li>
              <span>الأذونات: </span>
              <ul class="uk-list uk-column-1-2">
                @foreach($role->permissions as $permission)
                <li class="ee-en">{{ $loop->iteration }}: {{ $permission->name }}</li>
                @endforeach
              </ul>
            </li>
          </ul>
      </div>
    </div>
    
</div>
@endsection