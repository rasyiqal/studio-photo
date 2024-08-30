<x-layout>
    {{-- gambar --}}
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-0 w-full mb-14">
        <x-image-overlay image="{{ asset('img/contoh-putih.jpg') }}" caption="c0"/>
        <x-image-overlay image="{{ asset('img/foto-c1.jpg') }}" caption="c1" />
        <x-image-overlay image="{{ asset('img/foto-c4.jpg') }}" caption="c1" />
        <x-image-overlay image="{{ asset('img/foto-c3.jpg') }}" caption="c2" />
        <x-image-overlay image="{{ asset('img/foto-c2.jpg') }}" caption="c1" />
        <x-image-overlay image="{{ asset('img/foto-c3.jpg') }}" caption="c1" />
    </div>
    {{-- text --}}
    <div class="w-full mb-0 bg-black">
        <div class="text-center p-6 bg-white">
            <p class="text-[16px] font-bold text-gray-800 mb-2">A Self Portrait Photo Studio</p>
            <p class="text-[14px] text-gray-600 mb-4">Suitable for couple or your family photoshoot. Take the picture by
                yourself!</p>

            <div class="flex justify-center space-x-4">
                <span class="bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-xs font-semibold">Self Photo</span>
                <span class="bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-xs font-semibold">Foto Studio</span>
                <span class="bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-xs font-semibold">Self Studios</span>
            </div>
        </div>
    </div>
</x-layout>
