@extends('layout')

@section('content')


<hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-transparent to-transparent opacity-0 dark:opacity-0" />


<section class="mb-32">
  <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
    <div class="w-full mx-auto lg:w-6/12 xl:w-8/12">
      <div class="px-6 py-12 md:px-12 text-center">
           
        <div id="loading-custom-icon" class="h-[300px] w-full flex items-center justify-center">
        <h2 class="mb-4 text-2xl font-bold">Page en construction</h2>
          <div
            data-te-loading-management-init
            data-te-parent-selector="#loading-custom-icon">
            <div
              data-te-loading-icon-ref
              class="inline-block h-8 w-8 animate-spin border-transparent motion-reduce:animate-[spin_1.5s_linear_infinite]"
              role="status">
              <span class="[&>svg]:w-8">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
              </span>
            </div>
            <span data-te-loading-text-ref class="ml-2">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection