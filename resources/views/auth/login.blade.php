@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>マイページにログインする</h1>
    </div>
    
    <br>
    {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group row">
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('email', 'メールアドレス') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('password', 'パスワード') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                <div class="col-3 offset-sm-5">
                {!! Form::submit('ログイン', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
            <br>
            {{-- ユーザ登録ページへのリンク --}}
            <p class="text-center"> {!! link_to_route('signup.get', '新規登録はこちら') !!}</p>
    
@endsection