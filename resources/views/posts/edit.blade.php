<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('編集') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font relative">
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"></h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-black">映画に関することならなんでも！</p>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-black">画像を変更する場合は「ファイルを選択」してね！</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="body" class="leading-7 text-sm text-gray-600">Title</label>
                                <textarea name="post[title]" placeholder="50字以内" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-16 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $post->title }}</textarea>
                                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                            </div>
                        </div>
                        
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="category" class="leading-7 text-sm text-gray-600">Category</label>
                                    <select name="post[category_id]">
                                        @foreach($categories as $category)
                                            @if($category->id == $post->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="body" class="leading-7 text-sm text-gray-600">Body</label>
                                <textarea name="post[body]" placeholder="200字以内" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $post->body }}</textarea>
                                <p class="title_error" style="color:red">{{ $errors->first('post.body') }}</p>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="image" class="leading-7 text-sm text-gray-600">Image</label>
                                <div class="image">
                                    <input type="file" name="image" value="{{ $post->image }}"/>
                                    <p class="image_error" style="color:red">{{ $errors->first('image') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
    <a href="/posts/{{ $post->id }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none ml-2 mb-2">
        戻る
    </a>
</x-app-layout>