<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Обновить репорт') }}
        </h2>
    </x-slot>
    <div class="" id="modal">
        <form method="POST" action="{{route('report.update',$report->id)}}" class="form_reports">
            @csrf
            @method('put')
            <div class="wrapper__content_form">
                <input name="number" type="text" placeholder="number" value="{{$report['number']}}" required class="number__create_reports" />
                <textarea name="description" placeholder="description" cols="30" rows="10" required class="description__create_reports">{{$report['description']}}</textarea>
                @if(Auth::user()->role == "admin")
                <select name="statuse_id">
                    @foreach($statuses as $statuse)
                        <option value="{{ $statuse->id }}" {{ $report->statuse_id == $statuse->id ? 'selected' : '' }}>
                            {{ $statuse->name }}
                        </option>
                    @endforeach
                </select>
                @endif
                <button type="submit" class="create-report">Обновить</button>
            </div>
        </form>
    </div>
</x-app-layout>