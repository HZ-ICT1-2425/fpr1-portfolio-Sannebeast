<x-layout.main>
    <div class="box">
        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <h1>Create a New Blog Post</h1>
            <h2>
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" class="input" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control">
                    <input type="text" name="slug" class="input" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <input type="text" name="body" class="input">
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
