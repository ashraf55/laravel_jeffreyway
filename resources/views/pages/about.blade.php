@extends('app')
@section('content')

        <h3>About Learning Laravel Tutorial {{$data['first']}} {{ $pata['middle'] }}</h3>
        <p>Needs to be made clear that the visitor to the site needs to scroll down the page to read more…. arrows? this is usual behavior of a website. Do you prefer adding a scroll button? if, so we will ask ninedotmedia to add this LETS ADD THIS AND SEE HOW IT LOOKS</p>
        @if(count($people))
            <h3>Best Friends of Mine:</h3>
            <ul>
                @foreach($people as $person)
                    <li>{{$person}}</li>
                @endforeach
            </ul>
        @endif
@endsection