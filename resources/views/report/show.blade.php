@extends('layouts.main')
@section('content')
    <div class="" id="modal">
        <form method="POST" action="{{route('report.update',$report->id)}}" class="form_reports">
            @csrf
            @method('put')
            <div class="wrapper__content_form">
                <input name="number" type="text" placeholder="number" value="{{$report['number']}}" required class="number__create_reports" />
                <textarea name="description" placeholder="description" cols="30" rows="10" required class="description__create_reports">{{$report['description']}}</textarea>
                <select name="statuse_id">
                    @foreach($statuses as $statuse)
                        <option value="{{ $statuse->id }}" {{ $report->statuse_id == $statuse->id ? 'selected' : '' }}>
                            {{ $statuse->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn__create_reports">Обновить</button>
                <a class="text" href="{{route('report.index')}}">Вернуться назад</a>
            </div>
        </form>
    </div>
@endsection()