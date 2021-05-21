@extends('layouts.app')

@section('content')
   @if (Auth::check())
         
            <div class="col-sm-8">
                {{-- 登録店舗一覧 --}}
                @include('shops.shops')
                {{-- お店情報登録ページへのリンク --}}
     {{--引数は順にルーティング名・リンクにしたい文字列・URL内のパラメータに代入したい値を配列形式で指定（今回は不要なので空っぽ）・HTMLタグの属性を配列形式で指定（Boostrapのボタンとして表示するためのクラス指定）--}}
    {!! link_to_route('shops.create', 'お店を登録する', [], ['class' => 'btn btn-primary']) !!}
     {{--ボタンはとりあえずこれで。後でデザインは考える--}}
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