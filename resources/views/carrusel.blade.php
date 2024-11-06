<x-guest-layout>
    <!-- Contenedor del carrusel -->
    <div class="relative w-full h-85 overflow-hidden"> <!-- Altura fija ajustada aquí -->
       <div id="carousel" class="flex transition-transform duration-700 ease-out">
           <!-- Itera sobre las imágenes -->
           @foreach($images as $image)
               <div class="min-w-full h-80"> <!-- Altura fija para cada slide -->
                   <img src="{{ asset('storage/carrusel/' . $image) }}" alt="Imagen del carrusel" class="w-full h-full object-cover">
               </div>
           @endforeach
       </div>

       <!-- Botones de navegación -->
       <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">
           &#10094;
       </button>
       <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">
           &#10095;
       </button>
   </div>

   <!-- JavaScript para el carrusel -->
   <script>
       const carousel = document.getElementById('carousel');
       const nextButton = document.getElementById('nextButton');
       const prevButton = document.getElementById('prevButton');
       let currentIndex = 0;
       const totalSlides = {{ count($images) }};
       const slideInterval = 3000; // Intervalo en milisegundos (3 segundos)

       // Avanzar a la siguiente imagen automáticamente cada cierto tiempo
       const autoSlide = setInterval(() => {
           currentIndex = (currentIndex + 1) % totalSlides;
           updateCarousel();
       }, slideInterval);

       // Mueve al siguiente slide manualmente
       nextButton.addEventListener('click', () => {
           clearInterval(autoSlide); // Limpia el intervalo si se navega manualmente
           currentIndex = (currentIndex + 1) % totalSlides;
           updateCarousel();
       });

       // Mueve al slide anterior manualmente
       prevButton.addEventListener('click', () => {
           clearInterval(autoSlide); // Limpia el intervalo si se navega manualmente
           currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
           updateCarousel();
       });

       function updateCarousel() {
           const offset = currentIndex * -100;
           carousel.style.transform = translateX(${offset}%);
       }
   </script>
   
   <div class="flex flex-col items-center justify-center py-4 md:py-8 bg-white dark:bg-gray-900 p-4"> 
    <h1 class="text-gray-900 dark:text-white text-2xl py-7">Maquetando</h1>
    <h2 class="text-gray-900 dark:text-white">Títulos</h2>
</div>
   

   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 bg-white dark:bg-gray-900 p-4">
    <div class="flex flex-col items-center">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
        <button type="button" class="text-white bg-lime-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 dark:bg-lime-700 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            análisis especiales 
        </button>
    </div>
    <div class="flex flex-col items-center">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        <button type="button" class="text-white bg-lime-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 dark:bg-lime-700 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Julio</button>
    </div>
    <div class="flex flex-col items-center">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        <button type="button" class="text-white bg-lime-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 dark:bg-lime-700 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Bocchi</button>
    </div>
    <div class="flex flex-col items-center">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        <button type="button" class="text-white bg-lime-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 dark:bg-lime-700 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Julio</button>
    </div>
    <div class="flex flex-col items-center">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        <button type="button" class="text-white bg-lime-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 dark:bg-lime-700 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Julio</button>
    </div>
    <div class="flex flex-col items-center">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        <button type="button" class="text-white bg-lime-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 dark:bg-lime-700 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Julio</button>
    </div>
</div>

</x-guest-layaout>