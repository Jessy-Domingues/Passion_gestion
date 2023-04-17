<x-app-layout>
    

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @csrf
    <form action="{{ route('blog.stock' )}}" method="post" enctype="multipart/form-data" class="mt-10">

    <x-input-label for="titre" value="Titre de l'article"/>
    <x-text-input id="titre" name="titre"/>

    <x-input-label for="contenu" value="Contenu de l'article"/>
    <textarea name="contenu" id="contenu"></textarea>

    <x-input-label for="image" value="Image de l'article"/>
    <x-text-input id="image" name="image" type="file"/>

    </form>

    </div>

    
</x-app-layout>