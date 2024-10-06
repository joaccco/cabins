<x-admin-layout class="bg-transparent">
    <div class="p-6 pt-20">
        <!-- Carrousel -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("imageSlider", () => ({
                    currentIndex: 1,
                    images: [
                        "https://unsplash.it/640/425?image=30",
                        "https://unsplash.it/640/425?image=40",
                        "https://unsplash.it/640/425?image=50",
                    ],
                    previous() {
                        if (this.currentIndex > 1) {
                            this.currentIndex = this.currentIndex - 1;
                        }
                    },
                    forward() {
                        if (this.currentIndex < this.images.length) {
                            this.currentIndex = this.currentIndex + 1;
                        }
                    },
                }));
            });
        </script>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 grid-rows-2 gap-x-6 row-span-1">
            <div class="bg-gradient-to-r from-[#2F3467] to-[#7D86DD] col-span-2 h-5/6 rounded-xl border-t-4 border-purple-300 p-4 mb-2 shadow-md shadow-black/5">
                {{-- HEADER --}}
                <div class="grid grid-cols-2 lg:grid-cols-4 p-1 justify-center">
                    <div class="col-span-2 ml-2 mb-3">
                        <div class="text-sm font-bold bg-black/20 p-1 w-8/12 px-5 rounded-lg text-white uppercase">
                           {{--  <i class="ri-calendar-2-line"></i> {{ $formattedDate }} --}}
                        </div>

                        <div class="justify-center">
                            <h2 class="text-[#FFF1F1] font-encode font-bold text-2xl leading-8 italic">Bienvenido</h2>
                            <h3 class="text-white uppercase mt-0 font-lg text-semibold leading-6">
                               {{--  <span>{{ $user->name }}</span> --}}
                            </h3>
                        </div>
                    </div>
                    <div class="bg-black/20 text-3xl flex justify-center items-center shadow-xl font-bold italic rounded-lg mr-3 lg:mb-3">
                        <span class="leading-loose text-white">{{-- {{ $currentTime }} --}}</span>
                    </div>
                    <div>
                        <div>
                           {{--  @if ($errorMessage)
                                <div class="text-sm font-medium text-red-600">{{ $errorMessage }}</div>
                            @else --}}
                                <div class="bg-black/20 rounded-lg">
                                    <div class="w-full justify-center font-bold leading-loose text-xl">
                                        <p class="text-[#FFF1F1] italic font-blinker">
                                            <span class="text-3xl">{{-- {{ $emoji }} --}}</span>
                                           {{--  {{ $temperature }} --}}°C
                                        </p>
                                        <p class="text-white">
                                            <span class="font-black mt-1 text-lg px-2 capitalize italic rounded">{{-- {{ $description }} --}}</span>
                                        </p>
                                    </div>
                                </div>
                           {{--  @endif --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Remaining code unchanged -->
        </div>
    </div>
    @vite('resources/js/app.js')
</x-admin-layout>
