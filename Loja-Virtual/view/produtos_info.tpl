<main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8">

{foreach from=$PRO item=P}
    
    <div class="mx-auto max-w-2xl lg:max-w-none">
      <!-- Product -->
      <div class="mb-8 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
        <!-- Image gallery -->
        <div class="flex flex-col-reverse">
          <!-- Image selector -->
          <div class="aspect-w-1 aspect-h-1 w-full mt-5 mb-5 flex flex-row p-4">
            <!-- Tab panel, show/hide based on tab state. -->
            {foreach from=$IMAGES item=I}
              <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0" class="">
                <img src="{$I.img_nome}" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
              </div>
            {/foreach}
            <!-- More images... -->
          </div>

          <div class="aspect-w-1 aspect-h-1 w-full">
            <!-- Tab panel, show/hide based on tab state. -->
            <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
              <img src="{$P.pro_img}" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
            </div>

            <!-- More images... -->
          </div>

       
        </div>

        <!-- Product info -->
        <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
          <h1 class="text-5xl font-bold tracking-tight text-white">{$P.pro_nome}</h1>

          <div class="mt-3">
            <h2 class="sr-only">Informação do Produto</h2>
            <p class="text-4xl tracking-tight text-orange-700">R${$P.pro_valor}</p>
            <p class="text-4xl tracking-tight text-orange-700">Referência: {$P.pro_ref}</p>
          </div>

          <!-- Reviews -->
          <div class="mt-3">
            <h3 class="sr-only">Avaliação</h3>
            <div class="flex items-center">
              <div class="flex items-center">
                <!--
                  Heroicon name: mini/star

                  Active: "text-indigo-500", Inactive: "text-gray-300"
                -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="sr-only">4 out of 5 stars</p>
            </div>
          </div>

          <div class="mt-6">
            <h3 class="sr-only">Description</h3>

            <div class="text-3xl space-y-6 text-base text-white">
              <p>{$P.pro_desc}</p>
            </div>
          </div>

          <div class="mt-10 flex border-slate-100">
            <img src="{$TEMA}/images/logo-pagseguro.png" class="border-0 p-2">
          </div>
          <form class="mt-6" name="carrinho" method="post" action="{$PAG_COMPRAR}">
            <!-- Colors -->
            <input type="hidden" name="pro_id" value="{$P.pro_id}"/>
            <input type="hidden" name="acao" value="add"/>

            <div class="mt-10 flex">
              <button  class="text-2xl flex max-w-xl flex-1 items-center justify-center rounded-md border border-transparent bg-orange-600 py-3 px-8 text-base font-big text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Comprar</button>

              {* <button type="button" class=" ml-4 flex items-center justify-center rounded-md py-3 px-3 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                <!-- Heroicon name: outline/heart -->
                <svg class="h-10 w-10 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <span class="sr-only">Add aos favoritos</span>
              </button> *}
            </div>
          </form>

        </div>
      </div>

        {/foreach}
      </main>