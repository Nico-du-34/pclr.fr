@extends('layout')

@section('content')

<div class="container my-24 mx-auto md:px-6">
    <section class="mb-32">
    <div class="flex flex-wrap justify-center mt-12">
            @php
            $count = 0;
            @endphp
            @foreach($autosByCategorie as $categorie => $autos)
            @if($count % 8 == 0 && $count != 0)
            </div>
            <div class="flex flex-wrap justify-center mt-4">
            @endif
            <a href="#{{ strtolower($categorie) }}" class="mx-4 my-2 py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">{{ $categorie }}</a>
            @php
            $count++;
            @endphp
            @endforeach
        </div>
        @foreach($autosByCategorie as $categorie => $autos)
          <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
          <h3 id="{{ strtolower($categorie) }}" class="mb-12 text-center text-3xl font-bold">{{ $categorie }}</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              @foreach($autos as $auto)
              <div class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                  data-te-ripple-init data-te-ripple-color="light">
                  <img src="{{ $auto->image_url }}" class="w-full align-middle transition duration-300 ease-linear" />
                  <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
                      <div class="flex h-full items-end justify-start">
                          <div class="m-6 text-white">
                              <h5 class="mb-3 text-lg font-bold">{{ $auto->label }}</h5>
                              <p><small>Marque: {{ $categorie }}</small></p>
                              <p>Prix: {{ $auto->prix }} €</p>
                              <p>
                                  <small>
                                      Stock:
                                      @if($auto->disponibilite == 'en_stock')
                                          <span class="text-green-500">{{ $auto->disponibilite }}</span>
                                      @else
                                          <span class="text-red-500">{{ $auto->disponibilite }}</span>
                                      @endif
                                  </small>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
              </div>
              @endforeach
          </div>
        @endforeach
    </section>
</div>

@endsection