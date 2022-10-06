<x-app-layout>

    @include('layouts.frontend.catalogo.banner')
    @include('layouts.frontend.catalogo.producto')
    <section>
        <div class="container contenerdor">
            <h1 class="title desigm"> Medios de Pagos</h1>
            @include('layouts.frontend.inicio.slider-marca-pago')
        </div>
    </section>
</x-app-layout>
