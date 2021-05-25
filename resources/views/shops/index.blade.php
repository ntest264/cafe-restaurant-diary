@extends('layouts.app')

@section('content')
@if(Auth::check())
    <h1>登録店一覧</h1>
    {{--Controllerから渡された$shopsというレコード群が1つ以上あるとき--}}
    @if (count($shops) > 0)
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>登録番号</th>
                    <th>カテゴリー</th>
                    <th>店名</th>
                    <th>所在地</th>
                    <th>その他</th>
                </tr>
            </thead>
            <tbody>
                {{--ここで受け取ったレコード群を1つずつ$shopとして取り出す。--}}
                @foreach ($shops as $shop)
                <tr>
                    {{-- 登録情報詳細ページへのリンク --}}
                    <td>{!! link_to_route('shops.show', $shop->id, ['shop' => $shop->id]) !!}</td>
                    {{--idカラムの内容を表示--}}
                    {{--<td>{{ $shop->id }}</td> ここはなしでもOKと確認できたら消す--}}
                    {{--カテゴリーカラムの内容を表示--}}
                    <td>{!! nl2br(e(Str::limit($shop->category, 20))) !!}</td>
                    {{--店名カラムの内容を表示--}}
                    <td>{!! nl2br(e(Str::limit($shop->shop_name, 20))) !!}</td>
                    {{--所在地カラムの内容を表示--}}
                    <td>{!! nl2br(e(Str::limit($shop->place, 10))) !!}</td>
                    {{--その他カラムの内容を表示--}}
                    <td>{!! nl2br(e(Str::limit($shop->other, 200))) !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
     {{-- お店情報登録ページへのリンク --}}
     {{--引数は順にルーティング名・リンクにしたい文字列・URL内のパラメータに代入したい値を配列形式で指定（今回は不要なので空っぽ）・HTMLタグの属性を配列形式で指定（Boostrapのボタンとして表示するためのクラス指定）--}}
    {!! link_to_route('shops.create', 'お店を登録する', [], ['class' => 'btn btn-info']) !!}
     {{--ボタンはとりあえずこれで。後でデザインは考える--}}
@endif
@endsection