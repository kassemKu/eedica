@extends('manage.layouts.app') 

@section('title', 'manage users')
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">ادارة المستخدمين</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-text-small">
        <a href="{{ route('manage.dashboard') }}">لوحة التحكم</a>
      </li>
      <li ><a href="#" class="uk-disabled uk-text-small">ادارة المستخدمين</a></li>
    </ul>
  </div>
</div>

<div class="uk-container uk-padding">
  <div class="uk-overflow-auto uk-background-default ee-border">
    <div class="uk-grid-small uk-child-width-1-2 uk-padding" uk-grid>
      <div>
        <input class="uk-input uk-width-1-1 uk-border-rounded" type="text" placeholder="أدخل اسم المستخدم هنا">
      </div>
      <div class="uk-text-left">
        <a href="{{ route('users.create') }}" class="uk-button uk-button-default uk-border-rounded">
          <span uk-icon="icon: plus" class="uk-margin-small-left"></span>
          أضف مستخدما جديدا
        </a>
      </div>
    </div>

    <div class="uk-flex uk-flex-middle uk-flex-center">
      <div>
          <h4>فلترة نتائج البحث</h4>
          <p class="uk-text-small uk-text-muted">يمكن فلترة ابحث في المستخدمين بحسب الأسماء</p>
      </div>
    </div>
    
    <table class="uk-table uk-table-hover uk-table-divider">
      <thead>
        <tr>
          <th class="uk-table-shrink">ID</th>
          <th class="uk-table-shrin">الاسم</th>
          <th>البريد الالكتروني</th>
          <th>التصاريح</th>
          <th>تاريخ التسجيل</th>
          <th>المهام</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr class="uk-text-small">
          <td class="uk-text-danger ee-en">{{ $user->id }}</td>
          <td class="ee-en">{{ $user->name }}</td>
          <td class="ee-en">{{ $user->email }}</td>
          <td>
            @forelse ($user->roles as $role)
            <span class="uk-label uk-background-muted ee-border uk-text-muted ee-en">{{ $role->name }}</span>
            @empty
            <span class="uk-label">لا تصاريح</span>
            @endforelse
          </td>
          <td  class="ee-en">{{ $user->created_at }}</td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="uk-label uk-background-default ee-border ee-border uk-text-warning">
              تعديل
            </a>
            <a href="{{ route('users.show', $user->id) }}" class="uk-label uk-background-default ee-border ee-border-blue uk-text-primary">
              عرض
            </a>
            <a class="uk-label uk-background-default ee-border ee-border-red uk-text-danger">حذف</a>
          </td>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection