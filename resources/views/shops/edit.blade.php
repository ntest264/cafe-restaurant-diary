@extends('layouts.app')

@section('content')


<h1>登録番号 {{ $shop->id }} の編集ページ</h1>



 {!! Form::model($shop, ['route' => ['shops.update', $shop->id], 'method' => 'put']) !!}
 　　　　　　　　　　　　　<div class="form-group row">
                    {{--第一引数に Form::modelで指定されていたShopモデルのインスタンスである $shop のカラム（この場合 'catrgory' カラム）--}}
                    {{--第二引数にラベル名--}}
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('catrgory', 'カテゴリー') !!}
                    </div>
                    {{--第一引数 $shop の 'category' カラムを指定。Form::text() は <input type="text"> を生成--}}
                    {{--第二引数はテキストボックスに入れておきたい固定の初期値（不要なのでnull）--}}
                    {{--第三引数はタグの属性情報を配列形式で指定--}}
                    <div class="col-sm-6">
                    {!! Form::text('category', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {{--店名のフォーム--}}
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('shop_name', '店名') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::text('shop_name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {{--所在地のフォーム--}}
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('palce', '所在地') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::text('place', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {{--その他のフォーム--}}
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('other', 'その他（感想やメニュー内容など）') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::textarea('other', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            <div class="col-3 offset-sm-1">  
            {!! Form::submit('更新する', ['class' => 'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}
            
@endsection