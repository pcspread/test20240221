@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection

@section('content')
<section class="add">
    <div class="add-title">
        <h2 class="add-title__text">テスト追加</h2>
    </div>
    
    <div class="add-other">
        <a href="/reset" class="add__back-btn">戻る</a>
        @if (session('comment'))
        <p class="add__comment">{{ session('comment') }}</p>
        @endif
    </div>

    <div class="add-content">
        <form action="/add" class="add-form" method="POST">
        @csrf
            <div class="add-item">
                <label for="number" class="add-form__number">テスト番号</label>
                <input id="number" type="text" class="add-form__input" name="number" value="{{ !empty(session('number')) ? session('number') : old('number') }}">
                <p class="add-form___error">
                    @error('number')
                        {{ $errors->first('number') }}
                    @enderror
                </p>
            </div>
            <div class="add-item">
                <label for="title" class="add-form__title">テスト名</label>
                <input id="title" type="text" class="add-form__input" name="title" value="{{ !empty(session('title')) ? session('title') : old('title') }}">
                <p class="add-form___error">
                    @error('title')
                        {{ $errors->first('title') }}
                    @enderror
                </p>
            </div>
            <div class="add-item">
                <label for="content" class="add-form__content">テスト内容</label>
                <input id="content" type="text" class="add-form__input" name="content" value="{{ !empty(session('content')) ? session('content') : old('content') }}">
                <p class="add-form___error">
                    @error('content')
                        {{ $errors->first('content') }}
                    @enderror
                </p>
            </div>
            <div class="add-item">
                <label for="date" class="add-form__date">テスト日</label>
                <input id="date" type="date" class="add-form__input" name="date" value="{{ !empty(session('date')) ? session('date') :old('date') }}">
                <p class="add-form___error">
                    @error('date')
                        {{ $errors->first('date') }}
                    @enderror
                </p>
            </div>

            <div class="add__btn-wrapper">
                <button class="add-btn">入力内容を確認する</button>
            </div>
        </form>
    </div>
</section>
@endsection