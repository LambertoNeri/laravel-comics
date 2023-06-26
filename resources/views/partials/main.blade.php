


<main>                  {{--  main --}}
    <div class="jumbotron-container">
        <div class="current">CURRENT SERIES</div>
    </div>
    <div class="magazines-container">
        <div class="container-width">
            <ul class="list-inline d-flex flex-wrap">
                @foreach ($comics as $i=> $comic)
                    @include('partials.card')
                @endforeach
            </ul>
            <div class="load-more px-5 border-rounded py-2 fw-bold">LOAD MORE</div>
        </div>
    </div>
    @include('partials.link-bar')
</main>