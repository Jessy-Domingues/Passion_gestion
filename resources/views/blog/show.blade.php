<x-app-layout>
        
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <img src="{{ asset('/storage/' . $article->image) }}" alt="Photo de l'article">

    <div>
        {{ $article->contenu }}
    </div>

    </div>

    
</x-app-layout>