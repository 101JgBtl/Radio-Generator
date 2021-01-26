@extends('layout.app')

@section('content')
    <h3>Frequencies</h3>

    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th>NATO-Alphabet</th>
            @foreach($units as $unit)
                <th class="text-right">{{ $unit }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($frequencies as $freq)
            <tr>
                <td>{{ \App\Models\Unit::NATO_ALPHABETH[$freq->key] }}</td>
                @foreach($freq->frequencies as $item)
                    <td class="text-right">{{ $item }} MHz</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
