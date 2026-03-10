<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </div>
            <div class="col">
                @foreach($header_menu as $item)
                {{$item['text']}}
                @endforeach
            </div>
        </div>
    </div>
</header>