<x-app-layout>
    <slot>
        
        <h2 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">{{ $article->titre }}</h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <img src="{{ asset('/storage/' . $article->image) }}" alt="Photo de l'article">

        <div>
        {{ $article->contenu }}
        </div>

        </div>

        
    </slot>
</x-app-layout>