@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ユーザー登録</h1>
    </div>


 {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group row">
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('name', 'ユーザー名') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                
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

                <div class="form-group row">
                    <div class="col-3 offset-sm-1">
                    {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                    </div>
                    <div class="col-sm-6">
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-3 offset-sm-1">
                {!! Form::submit('登録', ['class' => 'btn btn-dark']) !!}
                </div>
            {!! Form::close() !!}
@endsection