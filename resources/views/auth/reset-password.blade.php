<x-layouts.guest :title="'パスワード再設定'">
    <div class="flex justify-center">
        <x-auth.card>
            <h2 class="text-xl font-medium text-gray-800 mb-6">パスワード再設定</h2>
            <form method="POST" action="/reset-password" class="space-y-4">
                @csrf
                <x-auth.input id="token" label="" type="hidden" value="{{ $token }}"/>
                <x-auth.input id="email" label="" type="hidden" value="{{ $email }}"/>
                <x-auth.input id="password" label="パスワード" type="password"/>
                <x-auth.input id="password_confirmation" label="パスワード確認" type="password"/>
                <x-auth.button>送信</x-auth.button>
            </form>
        </x-auth.card>
    </div>
</x-layouts.guest>