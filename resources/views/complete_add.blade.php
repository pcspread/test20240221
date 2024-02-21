@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/complete_add.css') }}">
@endsection

@section('content')
<section class="complete">
    <div class="complete-title">
        <h2 class="complete-title__text">テスト追加完了</h2>
    </div>
    <div class="complete-other">
        <a href="/" class="complete__home-btn">一覧へ</a>
    </div>

    <div class="complete-content">
        <p class="complete-text">
            テスト情報の追加が完了しました
        </p>
    </div>
</section>
@endsection