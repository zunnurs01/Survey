<x-layout>
    <div class="container my-5 py-2 rounded shadow">
        <h3>Survey</h3>
        <form action="/survey" method="post">
            @csrf
            <ol>
                @foreach($questions as $question)
                    <li>{{$question->question}}
                        @foreach($question->answers as $answer)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{$question->id}}" id="{{$answer->id}}" value="{{$answer->id}}">
                                <label class="form-check-label" for="{{$answer->id}}">
                                    {{$answer->answer}}
                                </label>
                            </div>
                        @endforeach
                    </li>
                @endforeach
            </ol>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</x-layout>
