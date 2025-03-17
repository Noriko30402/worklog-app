<header class="header">
  <div class="header__logo">
      <a href="/"><img src="{{ asset('img/logo.png') }}" alt="ロゴ"></a>
  </div>
  @if( !in_array(Route::currentRouteName(), ['register', 'login', 'verification.notice']) )
  <nav class="header__nav">
      <ul>
        @if(Auth::check())
          <li><a href="">勤怠</a></li>
          <li><a href="">勤怠一覧</a></li>
          <li><a href="">申請</a></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button class="header__logout">ログアウト</button>
            </form>
          </li>
        @endif
      </ul>
  </nav>
  @endif
</header>