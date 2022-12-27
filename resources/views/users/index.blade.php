<x-app-layout>
    <h1>Blog Name</h1>
    <h2>{{ Auth::user()->name }}</h2>
     <div class="own_posts">
        @foreach($own_posts as $post)
            <div>
                <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                <small>{{ $post->user->name }}</small>
                <p>{{ $post->body }}</p>
                <img src="{{ $post->image_url }}" alt=""/>
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
        @endforeach
        <div class="footer">
            <a href="/">戻る</a>
        </div>
   
        <div class='paginate'>
            {{ $own_posts->links() }}
        </div>
    </div>
</x-app-layout>
