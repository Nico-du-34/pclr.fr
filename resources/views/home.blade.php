@extends('layout')

@section('content')


<div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
  <div class="-m-1 flex flex-wrap md:-m-2">
    <div class="flex w-1/2 flex-wrap">
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="images/home/kfc.png" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="images/home/police2.png" />
      </div>
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="images/home/gn1.png" />
      </div>
    </div>
    <div class="flex w-1/2 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="images/home/concess1.png" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="images/home/dir1.png" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="images/home/police.png" />
      </div>
    </div>
  </div>
</div>



<hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />

<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32">
    <div
      class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
      <div class="flex flex-wrap items-center">
        <div class="hidden shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
          <img src="images/img1.webp" alt="Trendy Pants and Shoes"
            class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
        </div>
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
          <div class="px-6 py-12 md:px-12">
            <h2 class="mb-4 text-2xl font-bold">
              Bienvenue sur Paris City Life RP !
            </h2>
            
            <p class="mb-6 text-neutral-500 dark:text-neutral-300">
              Plongez au cœur de la Ville Lumière et explorez ses rues pavées, ses monuments emblématiques, et ses quartiers pittoresques comme jamais auparavant.
            </p>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              Paris City Life RP est un serveur de jeu de rôle (RP) unique, entièrement dédié à recréer l'atmosphère magique de Paris dans l'univers des jeux vidéo.
            </p>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              Notre serveur se distingue par son engagement envers un RP sérieux et immersif.
            </p>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              Chaque joueur est invité à incarner un personnage dans un Paris virtuel, où vous avez la possibilité de créer votre propre histoire, d'interagir avec d'autres joueurs et de développer votre personnage à travers une multitude de scénarios passionnants.
            </p>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              L'immersion est au cœur de notre expérience de jeu, et notre communauté est engagée à maintenir un environnement réaliste et authentique.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>

<hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />

<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center">
    <h2 class="mb-12 text-3xl font-bold">
      Notre équipe
    </h2>

    <div class="lg:gap-xl-12 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4">
      <div class="mb-12 lg:mb-0">
        <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="logo.png" alt="avatar" />
        <h5 class="mb-4 text-lg font-bold">Test 1</h5>
        <p class="mb-6">Fondateur</p>
      </div>
      <div class="mb-12 lg:mb-0">
        <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="logo.png" alt="avatar" />
        <h5 class="mb-4 text-lg font-bold">Test 2</h5>
        <p class="mb-6">Développer</p>
      </div>
      <div class="mb-12 md:mb-0">
        <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="logo.png" alt="avatar" />
        <h5 class="mb-4 text-lg font-bold">Test 3</h5>
        <p class="mb-6">Responsable</p>
      </div>
      <div class="mb-12 md:mb-0">
        <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="logo.png" alt="avatar" />
        <h5 class="mb-4 text-lg font-bold">Test 3</h5>
        <p class="mb-6">Administrateur</p>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>

<hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />



@endsection
