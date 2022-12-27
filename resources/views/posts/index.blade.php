<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>
    <h2 class="text-2xl">{{ Auth::user()->name }}</h2>
    
    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <h2
                            class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"
                        > 
                            映画に関係する投稿サイト
                        </h2>
                        <p class="text-body-color text-base">
                            映画に関係してたらなんでもいいよ！
                        </p>
                    </div>
                </div>
            </div>
        
        
            <div class="-mx-4 flex flex-wrap">
                @foreach ($posts as $post)
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        
                            <div class='post'>
                                <div class="mb-8 overflow-hidden rounded">
                                    <img
                                        src="{{ $post->image_url }}"
                                        alt="image"
                                        class="w-[300px] h-[168px]"
                                    />
                                </div>
                                <div>
                                    <span
                                        class="bg-primary mb-5 inline-block rounded py-1 px-4 text-center text-xs font-semibold leading-loose text-green"
                                    >
                                        {{ $post->updated_at }}
                                    </span>
                                    <h3>
                                        <a
                                            href="/posts/{{ $post->id}}"
                                            class="text-dark hover:text-primary mb-4 inline-block text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl"
                                        >
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <p class="text-body-color text-base">
                                        {{ $post->body }}
                                    </p>
                                </div>
                            </div>
                        
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

    
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <script>
        function deletePost(id) {
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>
