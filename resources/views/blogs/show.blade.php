<x-layout.main>
    <h1>{!! $blog->title !!}</h1>
    <p>{!! $blog->body !!}</p>
    <x-blog.blog-item :blog="$blog"></x-blog.blog-item>
</x-layout.main>
