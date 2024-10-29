<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel de Imágenes</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-black text-white">
    <!-- Header -->
    <x-header></x-header>

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

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });

        function updateCarousel() {
            const offset = currentIndex * -100;
            carousel.style.transform = `translateX(${offset}%)`;
        }
    </script>
</body>
</html>
