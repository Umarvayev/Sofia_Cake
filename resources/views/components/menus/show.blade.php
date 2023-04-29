<x-layouts.main>
    <x-slot:title>

    </x-slot:title>

    <div class="card" style="width: 18rem;">
        <img class="lazy img-fluid w-100 entered loaded" src="img/tort.jpg" alt="">
        <div class="card-body">
            @foreach ($cakes as $cake)

            <h5 class="card-title">{{ $cake->name }}</h5>
            <p class="card-text">{{ $cake->content }}</p>
            <p class="card-text"> uning narxi {{ $cake->price }} so'm</p>
            <a href="{{ url('cakes/show/'. $cake->id)}}" class="nav-link text-white active" >{{$cake->name}}</a>

            @endforeach

        </div>
      </div>

</x-layouts.main>
