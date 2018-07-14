<div class="uk-container uk-margin uk-flex uk-flex-center">
  <div class="uk-card uk-card-default uk-width-3-4@s">
    <div class="uk-grid-collapse uk-grid-match uk-box-shadow-xlarge" uk-grid>

      <div class="uk-width-1-2 uk-padding">
        <p>
            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
            
            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
            
            أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
            
            نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
            
            كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
        </p>
        <p>
            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
            
            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
        </p>
        <p>
            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
            
            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
        </p>
        <p>
            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
            
            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
        </p>
      </div>

      <div class="uk-width-1-2 uk-light uk-box-shadow-xlarge">
        <div class="uk-background-center-center uk-background-cover uk-panel uk-flex uk-background-blend-soft-light uk-background-secondary"
        style="background-image: url({{ asset('img/banner2.png') }});">
          <div class="uk-margin-large-top uk-width-1-1 uk-padding-small">

            <div class="uk-text-center">
              <h1 class="ul-align-center">
                <span class="uk-text-bold uk-text-danger"
                uk-icon="icon: info; ratio: 3.5"></span>
              </h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <fieldset class="uk-fieldset">
        
                <div class="uk-margin">
                  <label class="uk-form-label uk-text-success {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
                    البريد الالكتروني
                  </label>
                  <div class="uk-width-1-1 uk-inline">
                    <span class="uk-form-icon {{ $errors->has('email') ? ' uk-text-danger' : '' }}" uk-icon="icon: user">
                    </span>
                    <input
                    id="email"
                    type="email"
                    class="uk-input ee-en {{ $errors->has('email') ? ' uk-form-danger' : '' }}"
                    name="email"
                    value=""
                    placeholder="Example@app.com"
                    required autofocus >
                  </div>
                  @if ($errors->has('email'))
                  <span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="uk-margin">
                  <label
                    class="uk-form-label uk-text-success {{ $errors->has('password') ? ' uk-text-danger' : '' }}">
                    كلمة المرور
                  </label>
                  <div class="uk-width-1-1 uk-inline">
                    <span
                      class="uk-form-icon {{ $errors->has('password') ? ' uk-text-danger' : '' }}"
                      uk-icon="icon: lock">
                    </span>
                    <input
                    id="password"
                    type="password"
                    class="uk-input ee-en {{ $errors->has('password') ? ' uk-form-danger' : '' }}"
                    name="password"
                    placeholder="password"
                    required>
                  </div>
                  @if ($errors->has('password'))
                  <span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>{{-- Pasword --}}

                <div>
                  <button
                    type="submit"
                    class="uk-button uk-button-default uk-width-1-1 uk-box-shadow-medium uk-margin-medium-top uk-light ee-border-red uk-border-rounded">
                    تسجيل دخول
                  </button>
                </div>

                <div class="uk-clearfix uk-text-center">
                  <a href="{{ route('password.request') }}"
                  class="uk-text-small">
                    هل نسيت كلمة المرور؟
                  </a>
                </div>

              </fieldset>
            </form>

          </div>
        </div>
      </div>

    </div>{{-- Grid --}}
  </div>{{-- Card --}}
</div>{{-- Container LogIn --}}