<ul class="p-2">

    @foreach ($categories as $category)
        <li>
            <a href="{{ url('/c/' . $category->id) }}">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
    <li><a>View All</a></li>
</ul>
