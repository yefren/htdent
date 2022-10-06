@props(['categorias'])
<ul  class="menu_principal" x-data = "{open : false , open2 : false, open3 : false,open4 : false,subopen1:false,subopen2:false,
    subopen3:false,subopen4:false,subopen5:false,subopen6:false,subopen7:false,subopen8:false,subopen9:false,subopen10:false,subopen11:false,subopen12:false,subopen13:false
    ,subopen14:false,subopen15:false,subopen16:false,subopen17:false,subopen18:false,subopen19:false,subopen20:false,subopen21:false,subopen22:false,subopen23:false,subopen24:false
    ,subopen25:false,subopen26:false}" >


    <!-- INICIO -->
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li class="oculto"><a href="{{ route('login') }}">Ingresar</a></li>
    <li class="oculto"><a href="{{ route('register') }}">registrar</a></li>
    <!-- Equipos intraorales -->
    <li >
        <div class="menu_icono" >
         <a ><button x-on:click ="open = !open" >Equipos intraorales</button></a>
            {{-- <img class="icono-rotacion-arriba icono" src="{{ asset('Inicio/imagenes/icono-abajo.svg') }}" alt="" /> --}}
            <i class="fa-solid fa-sort-down"></i>

        </div>
        <!-- SUBMENU-1 -->

        <ul x-show="open" @click.away="open = false" class="submenu_1 submenu_1_activo" >
            <li   class="lista_menu_productos">
                <div class="menu_icono">
                    <a href="{{ route('catalogo') }}"> Ver todo</a>
                </div>
            </li>

            <li   class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click ="subopen1 = !subopen1"  > Rayos x Portatiles </button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen1" @click.away="subopen1 = false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  class="submenu_2 submenu_2_activo">
                    <li><a href="#">Rextar</a></li>
                    <li><a href="#">Nanoray</a></li>
                    <li><a href="#">VSI</a></li>
                </ul>
            </li>
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a> <button x-on:click ="subopen2 = !subopen2" > Sensor RVG</button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen2" @click.away="subopen2 = false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  class="submenu_2 submenu_2_activo">
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen3=!subopen3" > EzSensor</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen3" @click.away="subopen3 = false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  class="submenu_3 submenu_3_activo">
                            <li><a href="#">1,5</a></li>
                            <li><a href="#">2</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen4=!subopen4">Remedi</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen4" @click.away="subopen4 = false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="submenu_3 submenu_3_activo">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen5=!subopen5">PDX-1000 </button></a>
                            <i class="fa-solid fa-sort-down"></i>

                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen5" @click.away="subopen5 = false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  class="submenu_3 submenu_3_activo">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen6=!subopen6">Digitalizador Intraoral </button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen6" @click.away="subopen6 = false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  class="submenu_2 submenu_2_activo">
                    <li><a href="#">Cruxcan</a></li>
                </ul>
            </li>
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen7=!subopen7">Escaneador Intraoral </button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen7" @click.away="subopen7= false"  x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale0-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  class="submenu_2 submenu_2_activo">
                    <li><a href="#">EzScan</a></li>
                    <li><a href="#">I500</a></li>
                    <li><a href="#">I700</a></li>
                </ul>
            </li>

        </ul>

    </li>

    <!-- Equipos extraorales -->
    <li>
        <div class="menu_icono">
            <a ><button x-on:click ="open2 = !open2"> Equipos extraorales</button></a>
            <i class="fa-solid fa-sort-down"></i>
        </div>
        <!-- SUBMENU-1 -->
        <ul  x-show="open2" @click.away="open2= false" class="submenu_1 submenu_1_activo">
            <li   class="lista_menu_productos">
                <div class="menu_icono">
                    <a href="#"> Ver todo</a>
                </div>
            </li>

            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen8=!subopen8"> Vatech</button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen8" @click.away="subopen8= false" class="submenu_2 submenu_2_activo">
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen9=!subopen9">2D</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen9" @click.away="subopen9= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">Pax - i SC</a></li>
                            <li><a href="#">Pax-i</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen10=!subopen10">3D</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul  x-show="subopen10" @click.away="subopen10= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">A9</a></li>
                            <li><a href="#">Green X</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen11=!subopen11">Pointnix</button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen11" @click.away="subopen11= false"class="submenu_2 submenu_2_activo">
                    <li>
                        <div class="menu_icono">
                            <a ><button x-on:click="subopen12=!subopen12">2D</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen12"@click.away="subopen12= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">Point 200</a></li>
                            <li><a href="#">Point 500</a></li>
                            <li><a href="#">Point 800S HD</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen13=!subopen13">3D</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen13" @click.away="subopen13= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">Point 500S</a></li>
                            <li><a href="#">Point 800S HD 3d</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <!-- Implantes -->
    <li>
        <div class="menu_icono">
            <a><button  x-on:click ="open3 = !open3"> Implantes </button></a>
            <i class="fa-solid fa-sort-down"></i>
        </div>
        <!-- SUBMENU-1 -->
        <ul x-show="open3" @click.away="open3= false" class="submenu_1 submenu_1_activo">
            <li   class="lista_menu_productos">
                <div class="menu_icono">
                    <a href="#"> Ver todo</a>
                </div>
            </li>

            <!-- Point Implant -->
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen14=!subopen14">Point Implant </button> </a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen14" @click.away="subopen14= false"class="submenu_2 submenu_2_activo">
                    <li><a href="#">Implantes</a></li>
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen15=!subopen15">Accesorios</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen15" @click.away="subopen15= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">CEMENTED ABUTMENT</a></li>
                            <li><a href="#">Angled Abutment-Regular</a></li>
                            <li><a href="#">Kit quirurgico</a></li>
                            <li><a href="#">healing</a></li>
                            <li><a href="#">transfer</a></li>
                            <li><a href="#">analogo</a></li>
                            <li><a href="#">pilar temporal</a></li>
                            <li><a href="#">CCM Abutment</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Megagen -->
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen16=!subopen16">Megagen</button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen16" @click.away="subopen16= false"  class="submenu_2 submenu_2_activo">
                    <!-- Anyone -->
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen17=!subopen17">Anyone</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen17" @click.away="subopen17= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">Implantes</a></li>
                            <li>
                                <div class="menu_icono">
                                    <a><button x-on:click="subopen18=!subopen18">Accesorios</a>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                                <!-- SUBMENU-4 -->
                                <ul x-show="subopen18" @click.away="subopen18= false"  class="submenu_4 submenu_4_activo">
                                    <li><a href="#">Lab Analog</a></li>
                                    <li><a href="#">Impresssion coping</a></li>
                                    <li><a href="#">Ez post (Pilar Recto)</a></li>
                                    <li><a href="#">Angled Abutment</a></li>
                                    <li><a href="#">Kit quirurgico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- AnyRidge -->
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen19=!subopen19">AnyRidge</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen19" @click.away="subopen19= false" class="submenu_3 submenu_3_activo">
                            <li><a href="#">Implantes</a></li>
                            <li>
                                <div class="menu_icono">
                                    <a><button x-on:click="subopen20=!subopen20">Accesorios</button></a>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                                <!-- SUBMENU-4 -->
                                <ul x-show="subopen20" @click.away="subopen20= false"  class="submenu_4 submenu_4_activo">
                                    <li><a href="#">Lab Analog</a></li>
                                    <li><a href="#">CCM Abutment</a></li>
                                    <li><a href="#">Impression coping</a></li>
                                    <li><a href="#">Healing abutment</a></li>
                                    <li><a href="#">Angled abutment</a></li>
                                    <li><a href="#">Ez post</a></li>
                                    <li><a href="#">Kit quirurgico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Mini -->
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen21=!subopen21">Mini</button></a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen21" @click.away="subopen21= false"  class="submenu_3 submenu_3_activo">
                            <li><a href="#">Implantes</a></li>
                            <li>
                                <div class="menu_icono">
                                    <a><button x-on:click="subopen22=!subopen22">Accesorios</a>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                                <!-- SUBMENU-4 -->
                                <ul x-show="subopen22" @click.away="subopen22= false"  class="submenu_4 submenu_4_activo">
                                    <li><a href="#">Ez post</a></li>
                                    <li><a href="#">Angled abutment</a></li>
                                    <li><a href="#">Impression coping</a></li>
                                    <li><a href="#">Lab Analog</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <!-- Kuwotech -->
            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen23=!subopen23">Kuwotech</a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen23" @click.away="subopen23= false" class="submenu_2 submenu_2_activo">
                    <li><a href="#">Implantes</a></li>
                    <li>
                        <div class="menu_icono">
                            <a><button x-on:click="subopen24=!subopen24">Accesorios</a>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                        <!-- SUBMENU-3 -->
                        <ul x-show="subopen24" @click.away="subopen24= false"  class="submenu_3 submenu_3_activo">
                            <li><a href="#">ANGLED ABUTMENT</a></li>
                            <li><a href="#">FINE ABUTMENT</a></li>
                            <li><a href="#">HEALING ABUTMENT</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


        </ul>
    </li>
    <!-- Materiales -->
    <li>
        <div class="menu_icono">
            <a><button x-on:click ="open4 = !open4" > Materiales</button></a>
            <i class="fa-solid fa-sort-down"></i>
        </div>
        <!-- SUBMENU-1 -->
        <ul x-show="open4" @click.away="open4= false" class="submenu_1 submenu_1_activo">
            <li   class="lista_menu_productos">
                <div class="menu_icono">
                    <a href="#"> Ver todo</a>
                </div>
            </li>

            <li class="lista_menu_productos">
                <div class="menu_icono">
                    <a><button x-on:click="subopen25=!subopen25">Zirconia</button></a>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <!-- SUBMENU-2 -->
                <ul x-show="subopen25" @click.away="subopen25= false" class="submenu_2 submenu_2_activo">
                    <li><a href="#">PERFIT ZR HT</a></li>
                    <li><a href="#">PERFIT ZR UT</a></li>
                    <li><a href="#">PERFIT ZR TS-MULTILAYER</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
{{-- @foreach ($categorias as $categoria)
        <p>{{ $categoria->nombre }} </p>
    @endforeach

    @foreach ($categorias->first()->subcategorias as $subcategoria)
        <p>{{ $subcategoria->nombre }} </p>
    @endforeach

    <div>
        <img src="{{ Storage::url($categorias->first()->imagen) }}" alt="">
    </div> --}}
