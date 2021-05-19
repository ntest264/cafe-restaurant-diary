@extends('layouts.app')

@section('content')

    <h1>登録店一覧</h1>

    {{--Controllerから渡された$shopsというレコード群が1つ以上あるとき--}}
    @if (count($shops) > 0)
        <table class="table table-striped">
            <thead>
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
                    {{--idカラムの内容を表示--}}
                    <td>{{ $shop->id }}</td>
                    {{--カテゴリーカラムの内容を表示--}}
                    <td>{{ $shop->category }}</td>
                    {{--店名カラムの内容を表示--}}
                    <td>{{ $shop->shop_name }}</td>
                    {{--所在地カラムの内容を表示--}}
                    <td>{{ $shop->place }}</td>
                    {{--その他カラムの内容を表示--}}
                    <td>{{ $shop->other }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection