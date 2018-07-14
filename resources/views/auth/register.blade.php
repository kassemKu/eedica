{{-- @extends('layouts.app') 

@section('content')
<div class="uk-container uk-margin uk-flex uk-flex-center">
	<div class="uk-card uk-card-default uk-width-1-2@s">
		<div class="uk-card-header">
			<h3 class="uk-card-title uk-margin-remove">Register</h3>
		</div>
		<form class="uk-form-stacked" method="POST" action="{{ route('register') }}" novalidate>
			{{ csrf_field() }}
			<div class="uk-card-body">
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('name') ? ' uk-text-danger' : '' }}">
						Name
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('name') ? ' uk-text-danger' : '' }}" uk-icon="icon: user">
						</span>
						<input id="name" type="name" class="uk-input {{ $errors->has('name') ? ' uk-form-danger' : '' }}"
						 name="name" value="{{ old('name') }}" required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
						E-Mail Address
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('email') ? ' uk-text-danger' : '' }}" uk-icon="icon: user">
						</span>
						<input id="email" type="email" class="uk-input {{ $errors->has('email') ? ' uk-form-danger' : '' }}"
						 name="email" value="{{ old('email') }}" required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('password') ? ' uk-text-danger' : '' }}">
						Password
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('password') ? ' uk-text-danger' : '' }}"
						 uk-icon="icon: lock">
						</span>
						<input id="password" type="password" class="uk-input {{ $errors->has('password') ? ' uk-form-danger' : '' }}"
						 name="password" required>
					</div>
					@if ($errors->has('password'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="uk-margin">
					<label class="uk-form-label">
						Confirm Password
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon" uk-icon="icon: lock">
						</span>
						<input id="password" type="password" class="uk-input" name="password_confirmation"
						 required>
					</div>
				</div>
			</div>
			<div class="uk-card-footer uk-clearfix">
				<button type="submit" class="uk-button uk-button-primary uk-box-shadow-medium">
					Register
				</button>
			</div>
		</form>
	</div>
</div>
@endsection --}}

@extends('client.layouts.app') 
@section('title', 'register')

@section('content')
<div class="uk-container uk-margin-xlarge uk-flex uk-flex-center uk-margin-large-top">
	<div class="uk-card uk-card-default uk-width-2-3@s ee-border">
		<form class="uk-form-stacked uk-padding" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
			@csrf

			<legend class="uk-legend uk-text-muted uk-text-center">حساب جديد</legend>

			<div class="uk-flex uk-flex-center uk-grid-small uk-margin" uk-grid>
				<div class="uk-width-1-2@s">
					<label class="uk-form-label uk-text-primary
					{{ $errors->has('name') ? ' uk-text-danger' : '' }}">
						الاسم
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded
						{{ $errors->has('name') ? ' ee-border-red uk-text-danger' : '' }}" uk-icon="icon: user">
						</span>
						<input
						id="name"
						type="name"
						class="uk-input uk-border-rounded
						{{ $errors->has('name') ? ' ee-border-red' : '' }}"
						name="name"
						value="{{ old('name') }}"
						required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>

				<div class="uk-width-1-2@s">
					<label class="uk-form-label uk-text-primary
					{{ $errors->has('email') ? ' 	
					uk-text-danger' : '' }}">
							البريد الالكتروني
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span
							class="uk-form-icon uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded
							{{ $errors->has('email') ? ' ee-border-red uk-text-danger' : '' }}"
							uk-icon="icon: mail">
						</span>
						<input
						id="email"
						type="email"
						class="uk-input uk-border-rounded
						{{ $errors->has('email') ? ' ee-border-red' : '' }}"
						name="email"
						value="{{ old('email') }}"
						placeholder="البريد الالكتروني"
						required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
			</div>

			<div class="uk-flex uk-flex-center uk-grid-small uk-margin" uk-grid>
				<div class="uk-width-1-2@s">
					<label class="uk-form-label uk-text-primary
					{{ $errors->has('password') ? ' uk-text-danger' : '' }}">
						كلمة المرور
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded
						{{ $errors->has('email') ? ' ee-border-red uk-text-danger' : '' }}"
							uk-icon="icon: lock">
						</span>
						<input
						id="password"
						type="password"
						class="uk-input uk-border-rounded
						{{ $errors->has('password') ? ' ee-border-red' : '' }}"
						name="password"
						placeholder="كلمة المرور"
						required>
					</div>
					@if ($errors->has('password'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>

				<div class="uk-width-1-2@s">
					<label class="uk-form-label uk-text-primary">
						تأكيد كلمة المرور
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon uk-text-primary uk-background-muted ee-border uk-border-rounded"
						uk-icon="icon: lock">
						</span>
						<input id="password"
						type="password"
						class="uk-input uk-border-rounded"
						name="password_confirmation"
						placeholder="تأكيد كلمة المرور"
						required>
					</div>
				</div>
			</div>

			{{-- <div class="uk-margin-medium uk-grid-small uk-child-width-auto uk-grid">
				<label>
					<input class="uk-radio" type="radio" name="rloe" value="student" checked>
					<span class="uk-text-small uk-text-muted">تسجيل حساب طالب</span>
				</label>
				<label>
					<input class="uk-radio" type="radio" name="role" value="teacher">
					<span class="uk-text-small uk-text-muted">تسجيل حساب مدرس</span>
				</label>
			</div>  To Do--}}

			<div class="uk-margin uk-margin-left">
				<label class="uk-form-label uk-text-primary">
					الصورة الشخصية
					<span class="uk-text-success">((اختياري))</span>
				</label>
				<div class="js-upload uk-placeholder uk-text-center uk-margin-remove">
					<span uk-icon="icon: cloud-upload"></span>
					<span class="uk-text-middle">
						يمكنك سحب الصورة وافلاتها هنا
						<span class="uk-text-bold uk-text-danger">أو</span>
					</span>
					<div uk-form-custom>
							<input type="file" name="avatar" multiple>
							<span class="uk-link">اختر الصورة</span>
					</div>
				</div>
				{{-- <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>  TO DO --}}
			</div>

			<div class="uk-margin-small-left">
				<button
				type="submit"
				class="uk-button uk-button-default uk-border-rounded ee-border-blue uk-width-1-1 uk-margin-top">
				توثيق الحساب
				</button>
				<a href="{{ route('login') }}" class="uk-text-small">
					هل لديك بالفعل حساب على أي ايديكا؟
				</a>
			</div>

		</form>
	</div>
</div>
@endsection

@section('scripts')
<script>
//   var bar = document.getElementById('js-progressbar');

// 	UIkit.upload('.js-upload', {

// 		url: '',
// 		multiple: true,

// 		beforeSend: function () {
// 				console.log('beforeSend', arguments);
// 		},
// 		beforeAll: function () {
// 				console.log('beforeAll', arguments);
// 		},
// 		load: function () {
// 				console.log('load', arguments);
// 		},
// 		error: function () {
// 				console.log('error', arguments);
// 		},
// 		complete: function () {
// 				console.log('complete', arguments);
// 		},

// 		loadStart: function (e) {
// 			console.log('loadStart', arguments);

// 			bar.removeAttribute('hidden');
// 			bar.max = e.total;
// 			bar.value = e.loaded;
// 		},

// 		progress: function (e) {
// 			console.log('progress', arguments);

// 			bar.max = e.total;
// 			bar.value = e.loaded;
// 		},

// 		loadEnd: function (e) {
// 			console.log('loadEnd', arguments);

// 			bar.max = e.total;
// 			bar.value = e.loaded;
// 		},

// 		completeAll: function () {
// 			console.log('completeAll', arguments);

// 			setTimeout(function () {
// 					bar.setAttribute('hidden', 'hidden');
// 			}, 1000);

// 			alert('Upload Completed');
// 		}

// });

</script>
@endsection
