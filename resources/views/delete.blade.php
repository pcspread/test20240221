@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/delete.css') }}">
@endsection

@section('content')
<section class="delete">
    <div class="delete-title">
        <h2 class="delete-title__text">テスト削除確認</h2>
    </div>

    <div class="delete-content">
        <form action="/delete/{{ $test['id'] }}" class="delete-form" method="POST">
        @csrf
            <div class="delete-item">
                <label for="number" class="delete-form__number">テスト番号</label>
                <input id="number" type="text" class="delete-form__input" name="number" value="{{ $test['number'] }}" readonly>
            </div>
            <div class="delete-item">
                <label for="title" class="delete-form__title">テスト名</label>
                <input id="title" type="text" class="delete-form__input" name="title" value="{{ $test['title'] }}" readonly>
            </div>
            <div class="delete-item">
                <label for="content" class="delete-form__content">テスト内容</label>
                <input id="content" type="text" class="delete-form__input" name="content" value="{{ $test['content'] }}" readonly>
            </div>
            <div class="delete-item">
                <label for="date" class="delete-form__date">テスト日</label>
                <input id="date" type="date" class="delete-form__input" name="date" value="{{ $test['date_at'] }}" readonly>
            </div>

            <div class="delete-confirm">
                <p class="delete-confirm__text">上記テストデータを削除してもよろしいですか？</p>
            </div>

            <div class="delete__btn-wrapper">        
               <a href="/" class="delete__back-btn">いいえ</a>
                <button class="delete-btn">はい</button>
            </div>
        </form>
    </div>
</section>
@endsection