@extends('layouts.main')
@section('content')
<div class="menu__container">
  @foreach($array as $item)
      <div class="card__container">
          <img  class="card__img" src="{{ $item['pat'] }}" alt="{{ $item['title'] }}" width="100">
          <div class="text__container">
              <p>{{ $item['title'] }}</p>
              <p>{{ $item['price'] }}</p>
          </div>
      </div>
  @endforeach
</div>
@endsection()