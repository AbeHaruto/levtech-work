<x-app-layout>
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <h2
                            class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"
                        > 
                            お問い合わせ一覧
                        </h2>
                        @if (Auth::user()->id != 1)
                        <p class="text-body-color text-base">
                            このページには管理者からじゃないとページ遷移できないよ！<br>
                            管理者以外でこのページを見てるあなたはWebについての知識があるよ！<br>
                            すごいね！！
                        </p>
                        @endif
                    </div>
                </div>
            </div>
        
        
            <div class="-mx-4 flex flex-wrap">
                @foreach ($contacts as $contact)
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px] max-h-[168px]">
                        <div class='contact'>
                            
                            <div>
                                <h3>
                                    <a class="text-dark hover:text-primary mb-4 inline-block text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl">
                                        {{ $contact->name }}
                                    </a>
                                </h3>
                                <p class="text-body-color text-base">
                                    {{ $contact->body }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>   