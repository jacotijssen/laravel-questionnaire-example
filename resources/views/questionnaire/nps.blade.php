<h1>
    {{ $question->name }}
</h1>
<input type="number" min="0" max="10" name="answers[{{ $question->id }}]">