
<header class="p-3">
 
    <div class="navBar dFlex spaceAround">

        <div class="dFlex alignCenter">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Laravel Logo">
        </div>
        
        <div class="dFlex alignCenter">
            @foreach ($links as $link)
                <p class="linksMenu" href="{{ $link['href'] }}">{{ $link['text'] }}</p>
            @endforeach
        </div>

    </div>
</header>

