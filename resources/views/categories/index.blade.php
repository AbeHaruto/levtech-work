<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('カテゴリー') }}
        </h2>
    </x-slot>
    
    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <h2
                            class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"
                        > 
                            {{ $category->name }}
                        </h2>
                        <p class="text-body-color text-base">
                            
                        </p>
                    </div>
                </div>
            </div>
        
        
            <div class="-mx-4 flex flex-wrap">
                @foreach ($posts as $post)
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10">
                        <div class='post'>
                            <a class="mb-8 overflow-hidden rounded" href="/posts/{{ $post->id}}">
                                @if (isset($post->image_url))
                                    <img
                                        src="{{ $post->image_url }}"
                                        alt="image"
                                        class="mx-auto w-94 h-52"
                                    />
                                @endif
                            </a>
                            <div>
                                <p>
                                    <a
                                        href="/categories/{{ $post->category->id }}"
                                        class="relative inline-block w-24 mt-2 px-6 py-3 overflow-hidden text-base font-semibold text-center text-white rounded-lg bg-indigo-500 hover:bg-indigo-400"
                                    >
                                        {{ $post->category->name }}
                                    </a>
                                    <a
                                        href="/user/{{ $post->user->id }}"
                                        class="relative inline-block w-40 mt-2 px-6 py-3 overflow-hidden text-base font-semibold text-center text-white rounded-lg bg-indigo-500 hover:bg-indigo-400"
                                    >
                                        {{ $post->user->name }}
                                    </a>
                                    
                                </p>
                                
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
        {{ $posts->links('vendor.pagination.custom') }}
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
