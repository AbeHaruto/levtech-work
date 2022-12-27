<x-app-layout>
    <h1>Blog Name</h1>
    <h2>{{ Auth::user()->name }}</h2>
    <a href="/posts/create">create</a>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <a href="/posts/{{ $post->id}}"><h2 class='title'>{{ $post->title }}</h2></a>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <p class='body'>{{ $post->body }}</p>
                <p class='date'>{{ $post->updated_at }}</p>
                <img src="{{ $post->image_url }}" alt=""/>
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
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <a href="/" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none ml-2 mb-2">
        戻る
    </a>
    <script>
        function deletePost(id) {
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>
