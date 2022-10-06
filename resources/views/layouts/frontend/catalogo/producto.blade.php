
<div class=" contenedor_caja_producto w-0 h-auto">
    <div class=" contenedor_menu_producto bg-slate-300 h-auto">
        <div class="titulo ">
            <h2>Marca</h2>
        </div>
        <div class="caja">
            <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-black">Rayos X Portatiles</label>
            </div>
            <div class="flex items-center mb-4">
                <input checked id="checked-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-black">Sensor RVG</label>
            </div>
            <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox"
                    class="ml-2 text-sm font-medium text-black">Digitalizador Intraoral</label>
            </div>
            <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox"
                    class="ml-2 text-sm font-medium text-black">Escaneador Intraoral</label>
            </div>
        </div>
        <div class="rango_precio">
            <div class="Quiz--component SliderRange" x-data="{ min: 200, max: 500 }">
                <h2 class="Quiz--question SliderRange--question">FILTRAR POR PRECIO</h2>
                <h3 class="Quiz--description SliderRange--description"></h3>
                <div class="multi-range-slider" wire:ignore data-min="100" data-max="900"
                    x-bind:style="'height: ' + (parseInt($refs.height.offsetHeight) + parseInt(getComputedStyle($refs.height)
                        .marginTop) + parseInt(getComputedStyle($refs.height).marginBottom)) + 'px;'">
                    <style
                        x-text="'.range::-webkit-slider-runnable-track { background: linear-gradient(90deg, #dee4ec calc('+ Number((min - $refs.min.min) * 100 / ($refs.min.max - $refs.min.min)) +
                        '% + '+ Number(16 - (Number((min - $refs.min.min) * 100 / ($refs.min.max - $refs.min.min)) * 0.32)) +'px), red calc('+ Number((min - $refs.min.min) * 100 / ($refs.min.max - $refs.min.min)) +
                        '% + '+ Number(16 - (Number((min - $refs.min.min) * 100 / ($refs.min.max - $refs.min.min)) * 0.32)) +'px), red calc('+ Number((max - $refs.max.min) * 100 / ($refs.max.max - $refs.max.min)) +
                        '% + '+ Number(16 - (Number((max - $refs.max.min) * 100 / ($refs.max.max - $refs.max.min)) * 0.32)) +'px), #dee4ec calc('+ Number((max - $refs.max.min) * 100 / ($refs.max.max - $refs.max.min)) +
                        '% + '+ Number(16 - (Number((max - $refs.max.min) * 100 / ($refs.max.max - $refs.max.min)) * 0.32)) +'px)) !important; }'">
                    </style>
                    <div class="range-slider" x-ref="height" id="min">
                        <div class="tooltip" x-html="parseInt(min)"
                            x-bind:style="'left: calc(' + Number((min - $refs.min.min) * 100 / ($refs.min.max - $refs.min.min)) +
                                '% + ' + Number(16 - (Number((min - $refs.min.min) * 100 / ($refs.min.max - $refs.min
                                    .min)) * 0.32)) + 'px)'">
                        </div>
                        <input class="range" type="range" id="min" x-ref="min"
                            x-on:input="if(Number(max) <= Number($event.target.value) + 100) { $event.target.value = Number(max) - 100; }"
                            x-model="min" step="10" min="100" max="900">
                    </div>


                </div>
            </div>
            <h3 class="Quiz--description SliderRange--description"> Precio </h3>

        </div>
        <div class="contenedor_imagem_producto">
            <div class="images">
                <h2 class="Quiz--description SliderRange--description">Producto que te puede interesa  </h2>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1560114928-40f1f1eb26a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=300&q=80"
                        alt="Running Kitty" title="Running Kitty"></div>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1518914781460-a3ada465edec?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                        alt="Tiny puppy" title="Tiny puppy"></div>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1555685812-4b943f1cb0eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80"
                        alt="Shocked Kitty" title="Shocked Kitty"></div>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1550948537-130a1ce83314?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80"
                        alt="Jumping puppy" title="Jumping puppy"></div>
                <div class="singleImg" ><img
                        src="https://images.unsplash.com/photo-1487300001871-12053913095d?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                        alt="Sleeping Kitty" title="Sleeping Kitty"></div>
                <div class="singleImg" ><img
                        src="https://images.unsplash.com/photo-1529906920574-628dc1e49f5a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80"
                        alt="Happy Puppy" title="Happy Puppy"></div>
            </div>
        </div>
    </div>

    <div class="container contenedor_catalogo_producto  ">
        <section class="gallery">
            <div class="images">
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1560114928-40f1f1eb26a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=300&q=80"
                        alt="Running Kitty" title="Running Kitty"></div>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1518914781460-a3ada465edec?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                        alt="Tiny puppy" title="Tiny puppy"></div>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1555685812-4b943f1cb0eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80"
                        alt="Shocked Kitty" title="Shocked Kitty"></div>
                <div class="singleImg"><img
                        src="https://images.unsplash.com/photo-1550948537-130a1ce83314?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80"
                        alt="Jumping puppy" title="Jumping puppy"></div>
                <div class="singleImg" ><img
                        src="https://images.unsplash.com/photo-1487300001871-12053913095d?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                        alt="Sleeping Kitty" title="Sleeping Kitty"></div>
                <div class="singleImg" ><img
                        src="https://images.unsplash.com/photo-1529906920574-628dc1e49f5a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=80"
                        alt="Happy Puppy" title="Happy Puppy"></div>
            </div>
        </section>


    </div>

</div>
