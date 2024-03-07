<div class="pt-3">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <=$rating)
            <x-mary-icon name="s-star" class="w-9 h-9 text-gray-500 bg-gray-200 rounded-lg p-2"/>
        @else
            <x-mary-icon name="o-star" class="w-9 h-9 text-gray-500 bg-gray-200 rounded-lg p-2"/>
        @endif
    @endfor


</div>
