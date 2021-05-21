@extends('layouts.app')

@section('content')

    <h1>お店登録ページ</h1>

    <div class="row">
        <div class="col-6">
            {{--フォームを開始--}}
            {{--第一引数に対象となるModelのインスタンスを取り、第二引数は連想配列を取る: 'route' => ルーティング名 --}}
            {!! Form::model($shop, ['route' => 'shops.store']) !!}

                <div class="form-group">
                    {{--第一引数に Form::modelで指定されていたShopモデルのインスタンスである $shop のカラム（この場合 'catrgory' カラム）--}}
                    {{--第二引数にラベル名--}}
                    {!! Form::label('catrgory', 'カテゴリー') !!}
                    {{--第一引数 $shop の 'category' カラムを指定。Form::text() は <input type="text"> を生成--}}
                    {{--第二引数はテキストボックスに入れておきたい固定の初期値（不要なのでnull）--}}
                    {{--第三引数はタグの属性情報を配列形式で指定--}}
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
                {{--ボタンのデザインはとりあえずこれ。後で調整--}}
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
            {{--フォームを終了--}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection