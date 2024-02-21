@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css') }}">
@endsection

@section('content')
<section class="edit">
    <div class="edit-title">
        <h2 class="edit-title__text">テスト編集確認</h2>
    </div>

    <div class="edit-other">
        <a href="/edit/{{ $id }}" class="edit__back-btn">戻る</a>
    </div>

    <div class="edit-content">
        <form action="/edit/{{ $id }}" class="edit-form" method="POST">
        @method('patch')
        @csrf
            <div class="edit-item">
                <label for="number" class="edit-form__number">テスト番号</label>
                <input id="number" type="text" class="edit-form__input" name="number" value="{{ $form['number'] }}" readonly>
            </div>
            <div class="edit-item">
                <label for="title" class="edit-form__title">テスト名</label>
                <input id="title" type="text" class="edit-form__input" name="title" value="{{ $form['title'] }}" readonly>
            </div>
            <div class="edit-item">
                <label for="content" class="edit-form__content">テスト内容</label>
                <input id="content" type="text" class="edit-form__input" name="content" value="{{ $form['content'] }}" readonly>
            </div>
            <div class="edit-item">
                <label for="date" class="edit-form__date">テスト日</label>
                <input id="date" type="text" class="edit-form__input" name="date" value="{{ $form['date'] }}" readonly>
            </div>

            <div class="edit__btn-wrapper">
                <button class="edit-btn">更新する</button>
            </div>
        </form>
    </div>
</section>
@endsection