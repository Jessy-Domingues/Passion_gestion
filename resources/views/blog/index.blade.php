<x-app-layout>
    <slot>
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Bienvenue sur le blog</h1>

        @foreach ($articles as $article)
            
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96" src="{{ asset('/storage/' . $article->image) }}"alt="">

            <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                <a href="#" class="text-sm text-blue-500 uppercase hover:underline">{{ $article->categories->nom }}</a>

                <a href="#" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                    {{ $article->titre }}
                </a>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                    {{ Str::limit($article->contenu, 120) }}
                </p>

                <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                <div class="flex items-center mt-6">

                    <div class="mx-4">
                        <h2 class="text-sm text-gray-700 dark:text-gray-200">{{ $article->user->name }}</h2>
                        <p class="text-sm text-gray-700 dark:text-gray-200">{{ $article->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
</slot>
</x-app-layout>