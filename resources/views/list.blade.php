@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/list.js') }}" defer></script>
@endsection

@section('content')
<section class="tests">
    <div class="tests-title">
        <h2 class="tests-title__text">テスト一覧</h2>
    </div>
    
    <div class="tests-other">
        <a href="/add" class="tests__add-btn">テスト追加</a>
        <a href="/" class="tests__sort-btn">テスト番号順に並び替える</a>
        <a href="/sort" class="tests__sort-btn">テスト日順に並び替える</a>
    </div>

    <div class="search-area">
        <input type="text" class="search-input">
        <button class="search-btn">抽出する</button>
        <a href="/" class="search__reset-btn">リセットする</a>   
    </div>

    <div class="tests-content">
        <table class="tests-table">
            <tr class="test-header">
                <th class="test-title">テスト番号</th>
                <th class="test-title">テスト名</th>
                <th class="test-title">テスト内容</th>
                <th class="test-title">テスト日</th>
                <th class="test-title"></th>
                <th class="test-title"></th>
            </tr>
            @foreach ($tests as $test)
            <tr class="test-item">
                <td class="test-content">{{ $test['number'] }}</td>
                <td class="test-content">{{ $test['title'] }}</td>
                <td class="test-content">{{ $test['content'] }}</td>
                <td class="test-content">{{ $test['date_at'] }}</td>
                <td class="test-content"><a href="/edit/{{ $test['id'] }}" class="test__edit-btn">編集</a></td>
                <td class="test-content"><a href="delete/{{ $test['id'] }}" class="test__delete-btn">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection