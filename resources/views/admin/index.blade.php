<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Список заявления') }}
        </h2>
        </x-slot>
<div class="flex w-full flex-col pr-[10%] pl-[10%] pt-[15px] max-md:pr-[0px] max-md:pl-[0px] max-md:pt-[0px]">
    <div class="flex bg-[#051AFF]">
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center max-md:text-sm">Номер заявик</p>
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center max-md:text-sm">Номер машины</p>
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center max-md:text-sm">Описание заявки</p>
        <p class="w-1/4 text-[#fff] text-center border-2 border-solid border-[#051AFF] font-semibold text-2xl self-center max-md:text-sm">Статус заявки</p>
    </div>
    <div class="flex flex-col ">
        @foreach($reports as $report)
            <div class="flex {{ $loop->even ? 'bg-[#FF000021]' : '' }}">
                <p class="{{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center max-md:text-xs">{{ $report['id'] }} 
                    {{-- @if($report->statuse->name == 'новое')
                        <a href="{{route('report.show', $report->id)}}">обновить</a>
                    @endif --}}
                </p>
                <p class="{{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center max-md:text-xs">{{ $report['number'] }}</p>
                <p class="{{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center max-md:text-xs">{{ $report['description'] }}</p>
                @if ($report->statuse->name == 'новое')
                    {{-- <p class="text-[] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center">{{ $report->statuse->name }}</p> --}}
                    <a class="text-[] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center max-md:text-xs" href="{{route('report.show', $report->id)}}">{{ $report->statuse->name }}</a>
                @endif
                @if ($report->statuse->name == 'отказано')
                    <p class="text-[#ff0000] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center max-md:text-xs">{{ $report->statuse->name }}</p>
                @endif
                @if ($report->statuse->name == 'подтверждено')
                    <p class="text-[#051aff] {{ $loop->even ? 'border-[#FF000021]' : '' }} w-1/4 text-center border-2 border-solid text-lg self-center max-md:text-xs" >{{ $report->statuse->name }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
</x-app-layout>