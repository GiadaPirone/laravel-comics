@extends('layouts.app')

@section('content')
    
    
    <div class="containerSlides">
        @foreach ($cards as $card)
            <div class="containerImg"> 
                <img class="imgFumetti" src="{{$card["thumb"]}}" alt="">
                <p class="titolo">{{ $card["title"]}}</p>
            </div>
        @endforeach
    </div>

    <div class="mainMenu  dFlex justifyContentCenter zIndex">
        @foreach ($features as $feature)
        <div>
            <img class="imgMenu" src="{{ Vite::asset("/resources/img/".$feature["path"])}}" alt="">
            <p class="testo">{{ $feature["txt"]}}</p>
        </div>
        @endforeach
    </div>
   
    
@endsection