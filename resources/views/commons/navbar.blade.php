<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                {{-- トップページへのリンク --}}
                <a class="navbar-brand" href="/">Cafe & Restaurant Diary</a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                     {{-- 登録店一覧ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('shops.index', '登録店舗一覧', [], ['class' => 'nav-link']) !!}</li>
                    </ul>
                </div>
            </nav>
</header>