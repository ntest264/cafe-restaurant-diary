@extends('layouts.app')

@section('content')

<h1>{{ $shop->shop_name }}の詳細ページ</h1>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>店名</th>
            <td>{{ $shop->shop_name }}</td>
        </tr>
        <tr>
            <th>カテゴリー</th>
            <td>{{ $shop->category }}</td>
        </tr>
        <tr>
            <th>所在地</th>
            <td>{{ $shop->place }}</td>
        </tr>
        <tr>
            <th>その他</th>
            <td>{{ $shop->other }}</td>
        </tr>
        </thead>
    </table>
    {{-- 登録情報編集ページへのリンク --}}
    {!! link_to_route('shops.edit', 'この情報を編集する', ['shop' => $shop->id], ['class' => 'btn btn-light']) !!}
    
     {{-- 登録情報削除フォーム --}}
    {!! Form::model($shop, ['route' => ['shops.destroy', $shop->id], 'method' => 'delete']) !!}
        {!! Form::submit('この情報を削除する', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    

@endsection