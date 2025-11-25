<x-layouts.guest :title="'パスワード再設定'">
    <div class="flex justify-center">
        <x-auth.card>
            <h2 class="text-xl font-medium text-gray-800 mb-6">パスワードの変更</h2>
            <form method="POST" action="/forgot-password" class="space-y-4">
                @csrf
                <x-auth.input id="email" label="メールアドレス" type="email" :displayError="false"/>
                <x-auth.button>送信</x-auth.button>
            </form>
        </x-auth.card>
    </div>
</x-layouts.guest>