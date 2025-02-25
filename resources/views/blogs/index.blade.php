<x-layout.main>
    <body>
    <div class="container">
    @foreach($blogs as $blog)
        <div class="blog-block">
            <h2>{{ $blog->title }}</h2>
            <br>
            <a href="{{ route('blogs.show', $blog) }}">
            Read more...</a>
        </div>
    @endforeach
    </div>
    <a href="{{ route ('blogs.create') }}" class="button">Make New Blog Post</a>
    </body>
</x-layout.main>
