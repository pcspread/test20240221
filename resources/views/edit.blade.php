@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<section class="edit">
    <div class="edit-title">
        <h2 class="edit-title__text">テスト編集</h2>
    </div>
    <div class="edit-other">
        <a href="/reset" class="edit__back-btn">戻る</a>
        @if (session('comment'))
        <p class="edit-comment">{{ session('comment') }}</p>
        @endif
    </div>

    <div class="edit-content">
        <form action="/edit/{{ $test['id'] }}" class="edit-form" method="POST">
        @csrf
            <div class="edit-item">
                <label for="number" class="edit-form__number">テスト番号</label>
                <input id="number" type="text" class="edit-form__input" name="number" value="{{ !empty(session('number2')) ? session('number2') : $test['number'] }}">
                <p class="edit-form___error">
                    @error('number')
                        {{ $errors->first('number') }}
                    @enderror
                </p>
            </div>
            <div class="edit-item">
                <label for="title" class="edit-form__title">テスト名</label>
                <input id="title" type="text" class="edit-form__input" name="title" value="{{ !empty(session('title2')) ? session('title2') : $test['title'] }}">
                <p class="edit-form___error">
                    @error('title')
                        {{ $errors->first('title') }}
                    @enderror
                </p>
            </div>
            <div class="edit-item">
                <label for="content" class="edit-form__content">テスト内容</label>
                <input id="content" type="text" class="edit-form__input" name="content" value="{{ !empty(session('content2')) ? session('content2') : $test['content'] }}">
                <p class="edit-form___error">
                    @error('content')
                        {{ $errors->first('content') }}
                    @enderror
                </p>
            </div>
            <div class="edit-item">
                <label for="date" class="edit-form__date">テスト日</label>
                <input id="date" type="date" class="edit-form__input" name="date" value="{{ !empty(session('date2')) ? session('date2') : $test['date_at'] }}">
                <p class="edit-form___error">
                    @error('date')
                        {{ $errors->first('date') }}
                    @enderror
                </p>
            </div>

            <div class="edit__btn-wrapper">
                <button class="edit-btn">入力内容を確認する</button>
            </div>
        </form>
    </div>
</section>
@endsection