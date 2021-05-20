@extends('layouts.app')

@section('content')

<h1>登録番号{{ $shop->id }}の詳細ページ</h1>
    //デザインはまた後程（createページのようにできたらしたい）
    <table class="table table-bordered">
        <tr>
            <th>登録番号</th>
            <td>{{ $shop->id }}</td>
        </tr>
        <tr>
            <th>カテゴリー</th>
            <td>{{ $shop->category }}</td>
        </tr>
        <tr>
            <th>店名</th>
            <td>{{ $shop->shop_name }}</td>
        </tr>
        <tr>
            <th>所在地</th>
            <td>{{ $shop->place }}</td>
        </tr>
        <tr>
            <th>その他</th>
            <td>{{ $shop->other }}</td>
        </tr>
    </table>
    {{-- 登録情報編集ページへのリンク --}}
    {!! link_to_route('shops.edit', 'この情報を編集する', ['shop' => $shop->id], ['class' => 'btn btn-light']) !!}
    
    
    

@endsection