<header> {{-- header --}}
    <div class=blue-band>
        <div class="container-width d-flex justify-content-end">
            <div class="d-flex ">dc powerGM VisaR</div>
            <div class="d-flex ps-5">additional DC site-></div>
            
        </div>
    </div>
    <div class="container-width d-flex align-items-center height justify-content-between">

        <div class="logo align-items-center">     {{-- logo --}}
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>

        <div class="nav height d-flex align-items-center mt-3 fw-bold">  {{-- nav --}}
            <ul class="list-inline">
                @foreach ($header as $voice)
                    <li class="list-inline-item"><a class="text-decoration-none text-dark" href="#">{{$voice}}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="searchbar">        {{-- searchbar --}}
            <span class="ps-5 fw-bold">search ??</span>
        </div>
    </div>
</header>