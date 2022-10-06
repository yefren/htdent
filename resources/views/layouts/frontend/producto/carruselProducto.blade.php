
<main class=" text-white flex items-center justify-center" x-data="carouselFilter()">
    <div class="container w-3 grid grid-cols-1 imagenes">
      <div class="row-start-1 col-start-1"
           x-show="active == 0"
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="opacity-0 transform scale-90"
           x-transition:enter-end="opacity-100 transform scale-100"
           x-transition:leave="transition ease-in duration-300"
           x-transition:leave-start="opacity-100 transform scale-100"
           x-transition:leave-end="opacity-0 transform scale-90"
      >
        <div class="grid grid-cols-1 grid-rows-1 .contenedor_marca" x-data="carousel()" x-init="init()">
          <div class="carousel col-start-1 row-start-1" x-ref="carousel">
            <div class="w-1/5 px-2  contenedor_imagen_producto">
                <img class="imagen" src="{{ asset('imagenes/marca_slider/Logos metodo de pago_Mesa de trabajo 1.svg') }}" width="100" alt=""
                loading="lazy">
            </div>
            <div class="w-1/5 px-2 contenedor_imagen">
                <img class="imagen" src="{{ asset('imagenes/marca_slider/Logos metodo de pago-02.svg') }}" width="100" alt=""
                loading="lazy">
            </div>
            <div class="w-1/5 px-2 contenedor_imagen">
                <img class="imagen" src="{{ asset('imagenes/marca_slider/Logos metodo de pago-03.svg') }}" width="100" alt=""
                loading="lazy">
            </div>
            <div class="w-1/5 px-2 contenedor_imagen ">
                <img class="imagen" src="{{ asset('imagenes/marca_slider/Logos metodo de pago-04.svg') }}"  width="100" alt=""
                loading="lazy">
            </div>
            <div class="w-1/5 px-2 contenedor_imagen ">
              <img class="imagen" src="{{ asset('imagenes/marca_slider/Logos metodo de pago-05.svg') }}"  width="100" alt=""
              loading="lazy">
          </div>
          <div class="w-1/5 px-2 contenedor_imagen">
            <img class="imagen" src="{{ asset('imagenes/marca_slider/Logos metodo de pago-06.svg') }}"  width="100" alt=""
            loading="lazy">
        </div>
        </div>
      </div>

    </div>
  </main>
