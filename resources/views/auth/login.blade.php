<x-layouts.guest :title="'ログイン'">
    <div class="flex justify-center">
        <x-auth.card>
            <h2 class="text-xl font-medium text-gray-800 mb-6">ログイン</h2>
            <form method="POST" action="/login" class="space-y-4">
                @csrf
                <x-auth.input id="email" label="メールアドレス" type="email" :displayError="false"/>
                <x-auth.input id="password" label="パスワード" type="password" />
                <x-auth.button>ログイン</x-auth.button>
                <p class="text-center text-sm text-gray-500 mt-4">
                    アカウントをお持ちでない場合は
                    <a href="/register" class="text-indigo-600 hover:underline">新規登録</a>
                </p>
            </form>
        </x-auth.card>
    </div>
</x-layouts.guest>