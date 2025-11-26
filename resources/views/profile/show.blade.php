<x-layouts.app :title="'ユーザー情報'">
    <h2 class="text-2xl font-bold mb-4">ユーザー情報</h2>
    <div class="flex w-7xl max-w-3xs bg-white shadow-lg rounded-2xl  mx-auto bg-[url('/img/tri.png')] bg-cover bg-center [mask-image:linear-gradient(to_left,white_0%,transparent_50%)] ">
        <div class=" p-6 flex flex-col items-center text-center">
            <!-- アイコン画像 -->
            <img src="/img/sky.jpg" alt="icon" class="w-28 h-28 rounded-full object-cover mb-4 shadow">
            {{-- <img src="/img/user_icon.png" alt="icon" class="w-28 h-28 rounded-full object-cover mb-4 shadow"> --}}
            <div>
                <!-- 名前 -->
                <h2 class="text-xl font-semibold text-gray-800 mb-1">
                    {{ auth()->user()->name }}
                </h2>
                <!-- 下部を少し飾る例（任意） -->
                <div class="mt-auto text-xs text-gray-400">
                    
                </div>
            </div>
        </div>
        <div class="p-6 flex flex-col items-center text-center">
            <!-- ひとこと -->
            <p class=" text-sx mb-3 font-bold">
                ひとこと
            </p>
            <p class="text-gray-600 text-sm mb-6">
                Educureを勉強しています。
            </p>
        </div>
    </div>

</x-layouts.app>