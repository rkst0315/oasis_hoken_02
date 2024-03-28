@extends('layouts.app')

@section('content')

<div class="login">

    <form action="/login" method="post">
        @csrf
    
        <div class="input-group">
            <label for="username">ユーザー名</label>
            <input type="text" name="username">
        </div>
    
        <div class="input-group">
            <label for="password">パスワード</label>
            <input type="password" name="password">
        </div>

        <div class="submit-button">
            <button type="submit">ログイン</button>
        </div>
    
    </form>

</div>


@endsection


@section('footer', false)