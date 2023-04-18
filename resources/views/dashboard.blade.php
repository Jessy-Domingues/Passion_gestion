<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                    {{ session('success') }}
                    @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($articles as $article)
                    <div class="flex items center">

                    <a href="{{ route('articles.edit', $article) }}" class="rounded-md bg-yellow-500 px-5 py-3 my-1 hover:bg-yellow-400">Editer article "{{ $article->titre }}"</a>
                    <a href="#" class="rounded-md bg-red-600 px-5 py-3 my-1 hover:bg-red-500" 
                    onclick="event.preventDefault;
                              document.getElementById('destroy-article-form').submit();">Supprimer article "{{ $article->titre }}"
                        <form action="{{ route('articles.destroy', $article) }}" method="post" id="destroy-article-form">
                        @csrf
                        @method('delete')
                        </form>
                    </a>

                    </div>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>