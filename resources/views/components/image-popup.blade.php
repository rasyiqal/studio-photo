<div class="relative group overflow-hidden">
    <a href="#" onclick="openModal('{{ $id }}')" class="relative h-[500px] w-full group overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-30 z-10"></div>
        {{ $slot }}
        <p class="absolute top-0 right-0 left-0 bottom-0 flex items-center justify-center text-white text-[48px] z-20">
            {{ $caption }}
        </p>
    </a>

    <!-- Modal -->
    <div id="{{ $id }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-70 hidden z-50" onclick="closeModal('{{ $id }}')">
        <div class="relative bg-gray-200" onclick="event.stopPropagation();">
            <button onclick="closeModal('{{ $id }}')" class="absolute top-2 right-2 text-white text-3xl">&times;</button>
            <img src="{{ $image }}" alt="Gambar" class="w-full h-auto max-w-full max-h-screen object-cover" />
        </div>
    </div>
</div>