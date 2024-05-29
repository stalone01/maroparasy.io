<div x-data="{ open: false }" @flash-msg.window="open = true">
    <div x-show="open" class="border-2 border-green-400 text-green-600 bg-gray-200 font-semibold px-1 py-2">
        flash message
    </div>
</div>
