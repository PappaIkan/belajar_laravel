<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <article class="py-8">
        <h2 class='mb-1 text-3xl tracking-tighter font-bold text-gray-900'>{{$post['title']}}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href='#'>{{$post['author']}}</a> | {{$post['time']}}
        </div>
        <p class="my-4 font-light">{{$post['body'], 90}}</p>
        <a href='/posts' class="font-medium text-blue-500 hover:underline">&laquo; back to post</a>
    </article>
</x-layout>