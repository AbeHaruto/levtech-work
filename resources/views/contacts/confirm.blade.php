<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('お問い合わせ') }}
        </h2>
    </x-slot>
    
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">内容確認</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-black"></p>
        </div>
        <div class="py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-md px-4 md:px-8 mx-auto">
                <form method="POST" action="{{ route('contact.thanks') }}">
                    @csrf
            
                    <label>Name</label>
                    <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                        {{ $contact['name'] }}
                    </p>
                    <input name="contact[name]" value="{{ $contact['name'] }}" type="hidden">
                    
            
                    <label>Body</label>
                    <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                        {{ $contact['body'] }}
                    </p>
                    <input name="contact[body]" value="{{ $contact['body'] }}" type="hidden">

                    <button type="submit" value="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">send</button>
                </form>
                
            </div>
        </div>
    </div>
    <a href="/content" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none ml-2 mb-2">
        戻る
    </a>
        
</x-app-layout>
