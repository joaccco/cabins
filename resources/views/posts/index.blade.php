<x-app-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-6">Posts Turísticos</h1>

        @if ($posts->isEmpty())
            <p class="text-center text-gray-600">No hay posts disponibles.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('path/to/default-image.jpg') }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-2xl font-semibold text-gray-800 hover:text-blue-500 transition-colors duration-200">{{ $post->title }}</h2>
                            <p class="mt-2 text-gray-700">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="inline-block mt-3 text-white bg-blue-500 hover:bg-blue-600 rounded-full px-4 py-2 transition duration-200">Leer más</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
