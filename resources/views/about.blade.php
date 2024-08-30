<x-layout>
    {{-- text --}}
    <div class="w-full text-center mt-40">
        <p>The Full Story</p>
        <p class="text-[52px] mt-8 font-semibold">About</p>
        <p class="px-[350px] mt-4">
            <b>Se/f Studios</b>is a self portrait photo studio that offers new experience inspired by the concept of
            classic and minimalism lifestyle.
        </p>
        <p class="px-[340px] mt-6">
            With the evolving of trends and way of life that becoming more complex, living in a basic life is
            preferable. Less is more.
        </p>
    </div>
    <div class="flex w-full mt-24">
        <!-- Kontainer Kiri -->
        <div class="w-1/2 flex items-center justify-center bg-gray-200 h-[700px] overflow-hidden">
            <img src="{{ asset('img/dog.jpg') }}" alt="Gambar" class="max-w-full h-auto" />
        </div>

        <!-- Kontainer Kanan -->
        <div class="w-1/2 flex flex-col items-center justify-center bg-gray-100 py-4 text-center lg:px-40">
            <b class="text-[38px] mb-4">Our Belief</b>
            <p class="mb-4">
                We believe that a piece of photo will tell a lot of story and keep the memory remains.
            </p>
            <p>
                Thus, we want to make it more remarkable and special by offering a classic yet timeless photo experience for yours truly
            </p>
        </div>
    </div>
    {{-- bawah --}}
    <div class="flex w-full">
        <!-- Kontainer Kiri -->
        <div class="w-1/2 flex flex-col items-center justify-center bg-gray-100 py-4 text-center lg:px-40">
            <b class="text-[38px] mb-4">Our Service</b>
            <p class="mb-4">
                Everyone deserves a good photo to make the memory everlasting.
            </p>
            <p>
                We offer you a professional studio session that produce high quality photo result yet affordable for everyone. We want to make the experience even more momentous since all of the process is operated by your <b>Se/f</b>. 
            </p>
        </div>
        <!-- Kontainer Kanan -->
        <div class="w-1/2 flex items-center justify-center bg-gray-200 h-[700px] overflow-hidden">
            <img src="{{ asset('img/dog.jpg') }}" alt="Gambar" class="max-w-full h-auto" />
        </div>
    </div>

</x-layout>
