@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('answers.store') }}">
        @csrf

        @foreach ($questions as $question)
            @include($question->getViewName(), ['question' => $question])
        @endforeach

        <div class="mt-4">
            <button>Save</button>
        </div>
    </form>
@endsection
