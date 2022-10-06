<x-app-layout>
    <br> <br>
     <section>
        @include('layouts.frontend.producto.detalleProducto')
    </section>
    <br> <br>
    <section>
        <div>
            <center>
                @include('layouts.frontend.producto.video')
            </center>
        </div>
    </section>
    <br> <br>
    <hr>

    <section>
        <center>
            <div class="icon">
                <a href="https://www.facebook.com/htmed.dent" target="_blank" rel="noopener noreferrer"><i
                        class="fa-brands fa-square-facebook"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-pinterest-p"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"></a>
        </center>

        </div>
        <br> <br>
    </section>
    <section>
        <div class="container contenerdor">
            <h1 class="title desigm"> Medios de Pagos</h1>
            @include('layouts.frontend.inicio.slider-marca-pago')
        </div>
    </section>
    {{-- <section>
        <div class="container-fluid">
            <div class="container contenerdor ">
                <h1 class="title "> Equipos odontologicos más <b>vendidos</b> </h1>
                @include('layout.frontend.producto.slider_producto', ['producto' => $producto])
            </div>
        </div>
    </section> --}}



    <br> <br>


</x-app-layout>
