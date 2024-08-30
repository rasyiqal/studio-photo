<x-layout>
    <div class="flex justify-center mb-0 mt-24 ">
        <img src="{{ asset('img/pricing.webp') }}" alt="" srcset="" class="lg:w-[900px] h-auto sm:w-[9000px]">
    </div>
    <div class="text-center justify-center mt-16">
        <button
            class="font-semibold px-16 py-4 bg-gray-800 text-white border border-black transition-colors duration-300 hover:bg-white hover:text-black">Book
            Now</button>
        <p class="text-[24px] font-normal mt-12">Background Selection</p>
    </div>
    {{-- img --}}
    <div class="max-w-full mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
        <x-image-popup id="modal1" caption="White" image="{{ asset('img/contoh-putih.jpg') }}">
            <img src="{{ asset('img/contoh-putih.jpg') }}" alt="Gambar" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
        </x-image-popup>
        <x-image-popup id="modal2" caption="Black" image="{{ asset('img/contoh-hitam.jpg') }}">
            <img src="{{ asset('img/contoh-hitam.jpg') }}" alt="Gambar" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
        </x-image-popup>
        <x-image-popup id="modal3" caption="Gray" image="{{ asset('img/contoh-abu.jpg') }}">
            <img src="{{ asset('img/contoh-abu.jpg') }}" alt="Gambar" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
        </x-image-popup>
    </div>

    <script>
        let scrollPosition = 0; //scroll posisi awal

        function openModal(modalId) {
            // Save the current scroll position
            scrollPosition = window.scrollY;
            document.getElementById(modalId).classList.remove('hidden');
            // Prevent scrolling in the background
            document.body.style.position = 'fixed';
            document.body.style.top = `-${scrollPosition}px`;
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            // Restore scroll position
            document.body.style.position = '';
            document.body.style.top = '';
            window.scrollTo(0, scrollPosition);
        }
    </script>
</x-layout>
