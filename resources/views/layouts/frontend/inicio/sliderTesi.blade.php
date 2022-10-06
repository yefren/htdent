<main class=" text-white flex items-center justify-center" x-data="carouselFilter()">
    <div class="container grid grid-cols-1">
      <div class="row-start-2 col-start-1"
           x-show="active == 0"
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="opacity-0 transform scale-90"
           x-transition:enter-end="opacity-100 transform scale-100"
           x-transition:leave="transition ease-in duration-300"
           x-transition:leave-start="opacity-100 transform scale-100"
           x-transition:leave-end="opacity-0 transform scale-90"
      >
        <div class="grid grid-cols-1 grid-rows-1 " x-data="carousel()" x-init="init()">
          <div class="carousel col-start-1 row-start-1" x-ref="carousel">
            <div class="w-3/8 px-2 contenedor_testimonio">
                <img class="imagen" src="{{ asset('imagenes/testimonios/images.jpg') }}" alt="" width="220" srcset=""
                loading="lazy">
                <br>
                <h2 class="nombres">Dr Luis Acho</h2>
                <h3 class="profesion">Cirujano Oral / Dentista Propietario y Gerente Dental </h3>
                <p class="descripcion" style="color: #000; width: auto;
                text-align: center;
                display: flex;
                justify-content: center;">
                    Compra implantes Kuwotech desde un par de años, mi experiencia tecnica con ellos es muy buena, pero quizas el hecho mas importante para mi es que HT DENT SHOP , siempre esta ahi para mi , sin importa la hora o el dia , el envio siempre a tiempo Chile
                </p>
            </div>
            <div class="w-3/8 px-2 contenedor_testimonio">
                <img class="imagen" src="{{ asset('imagenes/testimonios/images.jpg') }}" alt="" width="220" srcset=""
                loading="lazy">
                <br>
                <h2 class="nombres">Dr Luis Acho</h2>
                <h3 class="profesion">Cirujano Oral / Dentista Propietario y Gerente Dental </h3>
                <p class="descripcion" style="color: #000; width: auto;
                text-align: center;
                display: flex;
                justify-content: center;">
                    Compra implantes Kuwotech desde un par de años, mi experiencia tecnica con ellos es muy buena, pero quizas el hecho mas importante para mi es que HT DENT SHOP , siempre esta ahi para mi , sin importa la hora o el dia , el envio siempre a tiempo Chile
                </p>
            </div>
            <div class="w-3/8 px-2 contenedor_testimonio">
                <img class="imagen" src="{{ asset('imagenes/testimonios/images.jpg') }}" alt="" width="220" srcset=""
                loading="lazy">
                <br>
                <h2 class="nombres">Dr Luis Acho</h2>
                <h3 class="profesion">Cirujano Oral / Dentista Propietario y Gerente Dental </h3>
                <p class="descripcion" style="color: #000; width: auto;
                text-align: center;
                display: flex;
                justify-content: center;">
                    Compra implantes Kuwotech desde un par de años, mi experiencia tecnica con ellos es muy buena, pero quizas el hecho mas importante para mi es que HT DENT SHOP , siempre esta ahi para mi , sin importa la hora o el dia , el envio siempre a tiempo Chile
                </p>
            </div>
            <div class="w-3/8 px-2 contenedor_testimonio">
                <img class="imagen" src="{{ asset('imagenes/testimonios/images.jpg') }}" alt="" width="220" srcset=""
                loading="lazy">
                <br>
                <h2 class="nombres">Dr Luis Acho</h2>
                <h3 class="profesion">Cirujano Oral / Dentista Propietario y Gerente Dental </h3>
                <p class="descripcion" style="color: #000; width: auto;
                text-align: center;
                display: flex;
                justify-content: center;">
                    Compra implantes Kuwotech desde un par de años, mi experiencia tecnica con ellos es muy buena, pero quizas el hecho mas importante para mi es que HT DENT SHOP , siempre esta ahi para mi , sin importa la hora o el dia , el envio siempre a tiempo Chile
                </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
