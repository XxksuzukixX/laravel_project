<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'アプリ名' }}</title>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    {{-- ナビバー --}}
    <header class="flex bg-white shadow p-4 justify-between items-center">
        <h1 class="text-3xl font-bold">Habit Tracker</h1>
        <div class="flex p-2 bg-gray-800 text-white rounded-2xl">
            <p class="px-2 font-bold">ゲストユーザー さん</p>
            <p class="px-2"><a href="/login">ログイン</a></p>
        </div>
    </header>

    <div class="flex mx-auto">
        {{-- サイドバー --}}
        <aside class="w-56 bg-gray-800 text-white p-4" style="height: calc(100vh - 72px);">
            <a href="/login" class="block py-2">ログイン</a>
            <a href="/register" class="block py-2">新規登録</a>
            <a href="#" class="block py-2">パスワードの変更</a>
        </aside>
        {{-- メインコンテンツ --}}
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>