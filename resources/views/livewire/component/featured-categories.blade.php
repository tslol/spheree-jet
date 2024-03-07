<div class="flex flex-wrap gap-2 mt-10">
    @foreach ($categories as $category)
        <a href="{{ url('/c/' . $category->id )}}">
        <div class="py-3 px-7 bg-transparent border-2 border-gray-300 rounded-lg hover:bg-gray-300 transition-all duration-300">{{ $category->name }}</div>
    @endforeach
</div>
