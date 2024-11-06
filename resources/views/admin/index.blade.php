@extends('layouts.main')
@section('content')
<div class="flex w-full flex-col">
    <div class="flex">
        <p class="w-1/4 text-center border-2 border-solid border-black font-semibold text-2xl self-center">Номер заявик</p>
        <p class="w-1/4 text-center border-2 border-solid border-black font-semibold text-2xl self-center">Номер машины</p>
        <p class="w-1/4 text-center border-2 border-solid border-black font-semibold text-2xl self-center">Описание заявки</p>
        <p class="w-1/4 text-center border-2 border-solid border-black font-semibold text-2xl self-center">Статус заявки</p>
    </div>
    <div class="flex flex-col">
        @foreach($reports as $report)
            <div class="flex">
                <p class="w-1/4 text-center border-2 border-solid border-black text-lg self-center">{{ $report['id'] }}</p>
                <p class="w-1/4 text-center border-2 border-solid border-black text-lg self-center">{{ $report['number'] }}</p>
                <p class="w-1/4 text-center border-2 border-solid border-black text-lg self-center">{{ $report['description'] }}</p>
                <p class="w-1/4 text-center border-2 border-solid border-black text-lg self-center">{{ $report->statuse->name }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection