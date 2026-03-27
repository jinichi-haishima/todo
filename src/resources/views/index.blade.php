@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="message">
    <div class="message__inner">
        <div class="message__log">
        Todoを作成しました
        </div>
    </div>
</div>

<div class="todo-form">
    <form class="todo__form--action" action="/todos" method="POST">
        @csrf
        <div class="todo__create">
            <input class="todo__text" type="text" name="todo">
            <button class="submit__button" type="submit">作成</button>
        </div>
    </form>
    
    <div class="todo__list--wrapper">
        <h3 class="todo__list--title">Todo</h3>
    {{-- TODO一覧表示エリア --}}
    <section class="list">
        <ul class="todo__list">
            {{-- foreach --}}
            <li class="todo__item">
                <p class="todo__item--text">牛乳を買う</p>
                <form class="todo__form--action2" action="">
                @csrf
                <div class="todo__button">
                    <button class="todo__button--add">更新</button>
                    <button class="todo__button--delete">削除</button>

                </div>
                </form>
            </li>

        </ul>
    </section>
    </div>
</div>
@endsection