<div
    x-data="{ show: true }"
    x-show="show"
    x-init="setTimeout(() => show = false, 10000)"
    class="fixed top-4 right-4 max-w-sm bg-white border border-red-300 shadow-xl rounded-lg px-5 py-4 z-50 flex items-start space-x-4"
>
    <!-- Icon Section -->
    <div class="text-red-600">
        !!!
    </div>

    <!-- Message Content -->
    <div class="flex-grow">
        <strong class="text-lg font-semibold text-red-600">Error</strong>
        <ul class="mt-2 text-sm text-gray-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Close Button -->
    <button
        @click="show = false"
        class="text-gray-400 hover:text-gray-600"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
</div>
