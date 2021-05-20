@extends('layouts.app')

@section('content')

<h1>登録番号 {{ $shop->id }} の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($shop, ['route' => ['shops.update', $shop->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {{--カテゴリーのフォーム--}}
                    {!! Form::label('catrgory', 'カテゴリー') !!}
                    {!! Form::text('category', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{--店名のフォーム--}}
                    {!! Form::label('shop_name', '店名') !!}
                    {!! Form::text('shop_name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{--所在地のフォーム--}}
                    {!! Form::label('palce', '所在地') !!}
                    {!! Form::text('place', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{--その他のフォーム--}}
                    {!! Form::label('other', 'その他（感想やメニュー内容など）') !!}
                    {!! Form::text('other', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新する', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>


@endsection