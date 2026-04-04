@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="category__alert">
  @if(session('message'))
  <div class="category__alert--success">
    {{ session('message') }}
  </div>
  @endif
  @if ($errors->any())
  <div class="category__alert--danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>

<div class="category__content">
  <form class="category__form" action="/categories" method="post">
    @csrf
        <input class="category__form-text" type="text" name="name" value="{{ old('name') }}">
        <button class="category__form-button-add" type="submit">作成</button>
  </form>

  <!-- カテゴリーの一覧表示 -->
  <div class="category-table">
    <table class="category-table__inner">
        <tr class="category-table__row">
            <th>
                <span class="category-table__header">CATEGORY</span>
            </th>
        </tr>
            @foreach ($categories as $category)
        <tr class="category-table__row">
            <td class="category-table__item">
                <form class="category-table__update" action="/categories" method="post">
                    @csrf
                    @method('patch')
                    <input class="category__table-text" type="text" name="name" value="{{ $category['name'] }}">
                    <input type="hidden" name="id" value="{{ $category['id'] }}">
                    <button class="category__table-button-add" type="submit">更新</button>
                  </form>
                    <form action="/categories" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$category ['id'] }}">
                    <button class="category__table-button-delete" type="submit">削除</button>
                  </form>
            </td>
        </tr>
            @endforeach
    </table>
    </div>
</div>
@endsection
