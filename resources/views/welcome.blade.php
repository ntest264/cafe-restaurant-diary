@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Cafe & Restaurant Diary</h1>
            {{--文字小さくしたい--}}
            <h4>お気に入りのカフェやレストランの記録をしましょう。</h4>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'ユーザー登録をする', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {{--ログインページへのリンク--}}
        </div>
    </div>
@endsection