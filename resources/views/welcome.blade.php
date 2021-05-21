@extends('layouts.app')

@section('content')
   {{--以下@elseまでは仮で　ユーザー名表示の部分とかは削るかも--}}
   @if (Auth::check())
          <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">
                {{-- 登録店舗一覧 --}}
                @include('shops.shops')
            </div>
        </div>
  @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Cafe & Restaurant Diary</h1>
            <h5>お気に入りのカフェやレストランの記録をしましょう。</h5>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'ユーザー登録をする', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {{--ログインページへのリンク--}}
            {!! link_to_route('login.post', 'ログインする', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
   @endif
@endsection