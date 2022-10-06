<x-app-layout>
    @section('tituloPagina', 'Inicio2')

    <x-slider-principal :sliders="$sliders" />


    <section>

        <div class="container contenerdor ">

            <h1 class="title "> Equipos odontologicos más <b>vendidos</b> </h1>
            @livewire('frontend.categoria.categoria-productos', ['productos' => $productos])
        </div>

    </section>



    <section>
        @include('layouts.frontend.inicio.banner')
    </section>
    <section>

        <div class="container contenerdor ">
            <h1 class="title desigm "> Nuevos Equipos Odontológicos </h1>
            @livewire('frontend.categoria.categoria-productos', ['productos' => $productos])
        </div>

    </section>

    <br><br>
    <section>
        @include('layouts.frontend.inicio.Valores')
    </section>
    <section>
        <div class="container contenerdor">
            <h1 class="title desigm"> Lo que dice sobre nosotros</h1>
            @include('layouts.frontend.inicio.sliderTesi')
        </div>
    </section>
    <section>
        <div class="container contenerdor">
            <h1 class="title desigm"> Medios de Pagos</h1>
            @include('layouts.frontend.inicio.slider-marca-pago')
        </div>
    </section>



    @push('script')
        <script>
            Livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: '#dots',
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    }, {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    }]
                });
            })
        </script>
    @endpush

</x-app-layout>
