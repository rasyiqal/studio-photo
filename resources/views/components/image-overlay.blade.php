<div class="relative w-full h-0 pb-[100%] group overflow-hidden">
    <img src="{{ $image }}" alt="Image" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:opacity-70">
    <!-- Overlay Hitam hover -->
    <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 group-hover:opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
        <h2 class="text-xl font-bold">{{ $caption }}</h2>
    </div>
</div>