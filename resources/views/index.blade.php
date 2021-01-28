@extends('layout.app')

@section('content')
    <div class="panel">
        <ul class="list">
            <li>
                <span>Step 1:</span>
                <span>Enter the Callsign and the type of Radio.</span>
            </li>
            <li>
                <span>Step 2:</span>
                <span>Press the Generate Button</span>
            </li>
            <li>
                <span>Step 3:</span>
                <span>Share the link with your team</span>
            </li>
            <li>
                <span>Step 4:</span>
                <span>Whenever you think, the enemy captured one of your radios, tell your team to change the frequency to e.g. "Tango". Everyone, who has the table will know the new frequency, everyone else won't!</span>
            </li>
            <li>
                <span>Step 5:</span>
                <span>Win the match :-)</span>
            </li>
        </ul>
    </div>

    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="row justify-content-md-center">
            <div class="mb-4 col-sm-12 col-lg-4">
                <button type="button" id="add_unit" class="btn btn-primary btn-lg btn-block">Add unit </button>
            </div>
        </div>

        <div id="unit_table"></div>

        <div class="row justify-content-md-center">
            <div class="mb-4 col-sm-12 col-lg-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Generate</button>
            </div>
        </div>
    </form>
@endsection
