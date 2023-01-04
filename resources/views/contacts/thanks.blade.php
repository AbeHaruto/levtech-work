<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('お問い合わせ') }}
        </h2>
    </x-slot>
    
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">送信完了</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-black">返信機能はまだ実装していないので、返信できません。</p>
        </div>
        <div class="py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-md px-4 md:px-8 mx-auto">
            
                <h3 class="text-3xl">
                    {{ $contact->name }}
                </a>
    
                <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                    {{ $contact->body }}
                </p>
                
            </div>
        </div>
    </div>

</x-app-layout>