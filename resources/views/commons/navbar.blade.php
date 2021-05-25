<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-info">
                {{-- トップページへのリンク --}}
                <a class="navbar-brand" href="/">Cafe & Restaurant Diary</a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                @if (Auth::check())
                    {{-- 登録店一覧ページへのリンク --}}
                   <li class="nav-item"><a href="/" class="nav-link">登録店一覧</a></li>
                    {{-- ログアウトへのリンク --}}
                   <li>{!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                @else
                 {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item"><a href="/login" class="nav-link">ログイン</a></li>
                @endif    
                    </ul>
                </div>
            </nav>
</header>