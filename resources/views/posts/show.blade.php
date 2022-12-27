<x-app-layout>
    <div class="py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-md px-4 md:px-8 mx-auto">
            <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center mb-4 md:mb-6">{{ $post->title }}</h1>
            
            <a href="/categories/{{ $post->category->id }}" class="font-semibold">{{ $post->category->name }}</a>

            <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                {{ $post->body }}
            </p>
            <div class="bg-gray-100 overflow-hidden rounded-lg shadow-lg relative mb-6 md:mb-8">
                <img src="{{ $post->image_url }}" loading="lazy" alt="image" class="w-full h-full object-cover object-center" />
            </div>
            @if ($post->user->id == Auth::user()->id)
                <div class="edit">
                    <a href="/posts/{{ $post->id }}/edit">edit</a>
                </div>
                <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
            @endif
        </div>
    </div>
    
    <a href="/" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none ml-2 mb-2">
        戻る
    </a>
    
    <script>
        function deletePost(id) {
            'use strict'
            
            if(confirm('この投稿を削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>