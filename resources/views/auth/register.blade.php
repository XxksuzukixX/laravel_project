<x-layouts.guest :title="'新規登録'">
    <div class="flex justify-center">
        <x-auth.card>
            <h2 class="text-xl font-medium text-gray-800 mb-6">新規登録</h2>
            <form method="POST" action="/register" class="space-y-4">
                @csrf
                <x-auth.input id="name" label="ユーザー名" type="text"/>
                <x-auth.input id="email" label="メールアドレス" type="email"/>
                <x-auth.input id="password" label="パスワード" type="password"/>
                <x-auth.input id="password_confirmation" label="パスワード確認" type="password"/>
                <x-auth.button>登録</x-auth.button>
                <p class="text-center text-sm text-gray-500 mt-4">
                    パスワードを忘れた場合は
                    <a href="/forgot-password" class="text-indigo-600 hover:underline">こちら</a>
                </p>
            </form>
        </x-auth.card>
    </div>
</x-layouts.guest>