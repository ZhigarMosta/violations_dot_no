<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Список заявления') }}
        </h2>
        </x-slot>
<div class="flex w-full flex-col pr-[10%] pl-[10%] pt-[15px]">
    <div class="flex bg-[#051AFF]">
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center">Номер заявик</p>
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center">Номер машины</p>
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center">Описание заявки</p>
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center">Статус заявки</p>
    </div>
    <div class="flex flex-col ">
        @foreach($reports as $report)
            <div class="flex {{ $loop->even ? 'bg-[#FF000021]' : '' }}">
                <p class="{{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center">{{ $report['id'] }} <a href="{{route('report.show', $report->id)}}">обновить</a></p>
                <p class="{{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center">{{ $report['number'] }}</p>
                <p class="{{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center">{{ $report['description'] }}</p>
                @if ($report->statuse->name == 'новое')
                    <p class="text-[] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center">{{ $report->statuse->name }}</p>
                @endif
                @if ($report->statuse->name == 'отказано')
                    <p class="text-[#ff0000] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center">{{ $report->statuse->name }}</p>
                @endif
                @if ($report->statuse->name == 'подтверждено')
                    <p class="text-[#051aff] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center" >{{ $report->statuse->name }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
</x-app-layout>