<x-layouts.app :title="'トップページ'">
    <h2 class="text-2xl font-bold mb-4">トップページ</h2>
    <p>ようこそ、{{ auth()->user()->name }} さん。</p>
</x-layouts.app>