<x-layouts.main>
    <x-slot:title>

    </x-slot:title>

    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="tab-class text-center">
                @php
                    $count = 0; //Initialize variable
                    @endphp
                <ul
                class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                @foreach ($menuses as $menu)
                @php
  $count += 1; //Initialize variable
@endphp
                <li class="nav-item">
       @if ($count == 1)

               <a href="{{ url('menus/show/'. $menu->id)}}" class="nav-link text-white active" >{{$menu->name}}</a>

       @else
               <a href="{{ url('menus/show/'. $menu->id)}}" class="nav-link text-white" >{{$menu->name}}</a>

               @endif
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Custom</a>
                </li> --}}
        @endforeach

            </ul>

    </div>
</div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3"
                        style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et
                        at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores
                        diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="/" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="/" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
</x-layouts.main>
