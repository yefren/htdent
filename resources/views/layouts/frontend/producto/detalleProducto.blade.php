

<div class="grid grid-cols-12 w-full lg:max-w-7xl mx-auto lg:p-4">
    <div class="col-span-12 lg:col-span-6 lg:mr-2">
      <div class="transition-all duration-1000 ease-in-out w-full"
           x-data="ProductGallery"
           x-init="init($el); $watch('activeImage', value => scroll());"
           :class="{ 'fixed top-0 bottom-0 right-0 left-0 z-50 w-screen h-screen overflow-hidden bg-white flex flex-col gap-4 p-6': isOpen }">

      <div class="text-right" x-show="isOpen" x-cloak>
          <a href="#" @click.prevent="toggleImage">
            <i class="fas fa-times text-2xl text-indigo-600"></i>
          </a>
      </div>

        <ul class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth pb-6" @wheel="mousewheelEvent($event)">
          <template x-for="(image, i) in images" :key="image">
            <li class="w-full flex-shrink-0 snap-start">
              <a href="#" @click.prevent="if(!isOpen){toggleImage()}">
                <img :src="image.url" class="m-auto max-h-full max-w-full">
              </a>
            </li>
          </template>
        </ul>

      <div class="m-auto max-w-full">
          <div class="flex" x-show="images.length>1" x-cloak>
              <a class="h-28 flex-grow-0 text-indigo-600 inline-flex items-center text-xl bg-white p-4" href="#"
                 @click.prevent="prev">
                  <i class="fas fa-arrow-left"></i>
              </a>
              <ul class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth">
                  <template x-for="(image, i) in images" :key="image">
                      <li class="w-28 flex-shrink-0 snap-start  mx-1" @wheel="mousewheelEvent($event)">
                          <a class="inline-block border-4" href="#" @click.prevent="activeImage=i"
                             :class="{'border-indigo-600': activeImage==i, 'border-white': activeImage!=i}">
                              <img :src="image.thumb" class="" height="150" width="150">
                          </a>
                      </li>
                  </template>
              </ul>
              <a class="h-28 flex-grow-0 inline-flex items-center text-xl text-indigo-600 bg-white p-4" href="#"
                 @click.prevent="next">
                  <i class="fas fa-arrow-right"></i>
              </a>
          </div>
      </div>
      </div>

  </div>
    <div class="col-span-12 lg:col-span-6 lg:ml-2">
        <h1 class="text-3xl font-bold mb-4">Super Cool Cat Calendar</h1>
      <div class="mb-4">
        <i class="fas fa-star text-indigo-400"></i>
        <i class="fas fa-star text-indigo-400"></i>
        <i class="fas fa-star text-indigo-400"></i>
        <i class="fas fa-star text-indigo-400"></i>
        <i class="fas fa-star text-indigo-400"></i>
        <i class="far fa-star text-indigo-400"></i>
        <i class="far fa-star text-indigo-400"></i>
      </div>

      <div class="mb-4 pb-4 border-b-2">The purrrfect gift for yourself and anyone else! 12 furmidable pages to stay pawsitive the whole year. Style your home with the meowst cattitude possible.</div>
      <div class="flex w-full justify-between">
        <div class="text-gray-400 mr-4 py-3">
          <span>only</span> <span class="text-2xl font-bold text-indigo-600">13.37 $</span>
        </div>
        <button class="bg-indigo-600 text-white text-lg font-bold width-auto px-4 py-1 shadow-lg hover:text-indigo-600 hover:bg-white transition-colors">Buy now</button>
      </div>


  </div>
