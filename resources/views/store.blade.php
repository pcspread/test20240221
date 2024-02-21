@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/store.css') }}">
@endsection

@section('content')
<section class="add">
    <div class="add-title">
        <h2 class="add-title__text">テスト追加確認</h2>
    </div>
    
    <div class="add-other">
        <a href="/add" class="edit__back-btn">戻る</a>
    </div>

    <div class="add-content">
        <form action="/add" class="add-form" method="POST">
        @method('patch')
        @csrf
            <div class="add-item">
                <label for="number" class="add-form__number">テスト番号</label>
                <input id="number" type="text" class="add-form__input" name="number" value="{{ $form['number'] }}" readonly>
            </div>
            <div class="add-item">
                <label for="title" class="add-form__title">テスト名</label>
                <input id="title" type="text" class="add-form__input" name="title" value="{{ $form['title'] }}" readonly>
            </div>
            <div class="add-item">
                <label for="content" class="add-form__content">テスト内容</label>
                <input id="content" type="text" class="add-form__input" name="content" value="{{ $form['content'] }}" readonly>
            </div>
            <div class="add-item">
                <label for="date" class="add-form__date">テスト日</label>
                <input id="date" type="text" class="add-form__input" name="date" value="{{ $form['date'] }}" readonly>
            </div>

            <div class="add__btn-wrapper">
                <button class="add-btn">追加する</button>
            </div>
        </form>
    </div>
</section>
@endsection