@extends('layouts.app')

@section('content')

    <a href="{{ route('questions.create') }}">Nieuwe vraag</a>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Model instance</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $questions as $question )
            <tr>
                <td>{{ $question->name }}</td>
                <td>{{ get_class($question) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if($questions->count())
    <p class="text-info">
        Zoals je ziet is de model instance niet App\Question, maar de eigenlijke class.
    </p>
    @endif
@endsection