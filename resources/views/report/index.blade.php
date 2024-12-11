<x-app-layout>
    <x-slot name="header">
        <div class="container-header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Список заявления') }}
            </h2>
            <button class="create-report" onclick="openModal()">создать заявление</button>
        </div>
    </x-slot>
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="dg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container__report">
                        @foreach($reports as $report)
                            <div class="wrapper__report">
                                <div class="del-up--report">
                                    <p class="created_at__report">{{ \Carbon\Carbon::parse($report['updated_at'])->translatedFormat("j m Y") }}</p>
                                    @if($report->statuse->name == 'новое')
                                    <div class="del-up_container">
                                        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                                            @method('delete')
                                            @csrf
                                            <input class="del-update" type="submit" value="Удалить">
                                        </form>
                                        <a class="del-report" href="{{route('report.show', $report->id)}}">обновить</a>
                                    </div>
                                    @endif
                                </div>
                                <div class="main-content--report">
                                    <p>{{ $report['number'] }}</p>
                                    <p>{{ $report['description'] }}</p>
                                    @if ($report->statuse->name == 'новое')
                                        <p class="status-new-report">{{ $report->statuse->name }}</p>
                                    @endif
                                    @if ($report->statuse->name == 'отказано')
                                        <p class="status-refused-report">{{ $report->statuse->name }}</p>
                                    @endif
                                    @if ($report->statuse->name == 'подтверждено')
                                        <p class="status-confirmed-report" >{{ $report->statuse->name }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="wrapper__form" id="modal">
                        <form method="POST" action="{{route('reports.store')}}" class="form_reports">
                            @csrf
                            <button class="close-modal__reports" onclick="closeModal()">X</button>
                            <div class="wrapper__content_form">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input name="number" type="text" placeholder=номер required class="number__create_reports" />
                                <textarea name="description" placeholder="описание" cols="30" rows="10" required class="description__create_reports"></textarea>
                                @if(Auth::user()->role == 'admin')
                                    <select name="statuse_id">
                                        @foreach($statuses as $status)
                                            <option value="{{ $status->id }}">
                                                {{ $status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="hidden" name="statuse_id" value="1">
                                @endif
                                <button type="submit" class="create-report">Создать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-app-layout>