<x-layout.main>
    <div class="box">
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>Create a New Blog Post</h1>
            <h2>
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" id="title" placeholder="Enter the title..."
                           class="input @error('title') is-danger @enderror"
                           value="{{ old('title', $blog->title) }}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control">
                    <input type="text" name="slug" id="slug" placeholder="Enter the slug..."
                           class="input @error('slug') is-danger @enderror"
                           value="{{ old('slug', $blog->slug) }}" autocomplete="slug" autofocus>
                    @error('slug')
                    <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <input type="text" name="body" id="body" placeholder="Enter the body..."
                           class="input @error('body') is-danger @enderror"
                           value="{{ old('body', $blog->body) }}" autocomplete="body" autofocus>
                    @error('body')
                    <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
