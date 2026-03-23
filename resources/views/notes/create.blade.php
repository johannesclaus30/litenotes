<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="" method="post">
                    <input type="text" name="title" placeholder="Title" class="w-full"></input>
                    {{-- ADD / CONTINUE THIS X-INPUT CHUCHU --}}
                    <textarea name="text" rows="10" placeholder="Start typing..."></textarea>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
