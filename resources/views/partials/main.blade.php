<main>
    <div class="container">
        <div class="cards">
            @foreach ($db as $card)
                <div class="card">
                    <a href="#">
                        <img src="{{$card["image"]}}" alt="{{$card["title"]}}">
                    </a>
                    <span>{{$card["title"]}}</span>
                </div>
            @endforeach
        </div>
        <a href="#"><button>load more</button></a>
    </div>
</main>