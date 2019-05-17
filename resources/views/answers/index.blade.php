@extends('layouts.app')

@section('content')

    <a href="{{ route('answers.create') }}">Nieuwe antwoorden invoeren</a>

    <table class="table">
        <thead>
        <tr>
            <th>Question</th>
            <th>Answer</th>
            <th>Question Relation instance</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $answers as $answer )
            <tr>
                <th>{{ $answer->question->name }}</th>
                <td>{{ $answer->value }}</td>
                <td>{{ get_class($answer->question) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection