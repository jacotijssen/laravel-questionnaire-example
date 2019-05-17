@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('questions.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Question type</label>
            <select name="type">
                @foreach($questionTypes as $questionType)
                    <option value="{{ $questionType }}">{{ $questionType }}</option>
                @endforeach
            </select>
        </div>

        <button>Save</button>
    </form>
@endsection