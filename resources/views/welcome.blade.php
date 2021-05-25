@extends('layouts.app')

@section('content')
   @if (Auth::check())
         
            <div class="col-sm-8">
                {{-- 登録店舗一覧 --}}
                   @include('shops.index')
            </div>
  @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Cafe & Restaurant Diary</h1>
            <h5>お気に入りのカフェやレストランの記録をしましょう。</h5>
            <br>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'ユーザー登録をする', [], ['class' => 'btn btn-lg btn-primary']) !!}
            <br>
            <br>
            {{--ログインページへのリンク--}}
            {!! link_to_route('login.post', 'ログインする', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
   @endif
@endsection