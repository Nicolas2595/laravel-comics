{{-- TEMPLATE --}}
@extends("../templates/main-template")

{{-- MAIN --}}
@section("content")
    <section class="news container">
        @foreach($db as $item){
            <div>
                <h2>{{$item["title"]}}</h2>
                <p>{{$item["body"]}}</p>
            </div>
        }
        @endforeach
    </section>
@endsection