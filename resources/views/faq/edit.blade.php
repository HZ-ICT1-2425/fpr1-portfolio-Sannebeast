<x-layout.main>
    <div class="box">
        <form action="{{ route('faq.edit') }}" method="POST">
            @csrf
            <h1>Edit FAQ Post</h1>
            <h2>Please fill out all the form fields and click 'Submit'</h2>

            {{-- Here are all the form fields --}}
{{--            <div class="field">--}}
{{--                <label for="title" class="label">Question</label>--}}
{{--                <div class="control">--}}
{{--                    <input type="text" name="question" class=""input @error('title') is-danger @enderror"--}}
{{--                    value="{{ old('question', $faq) }}" autocomplete="title" autofocus>--}}
{{--                    @error('title')--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="field">
                <label for="question" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="question" placeholder="Enter the post's title..."
                           class="input @error('question') is-danger @enderror"
                           value="{{ old('question', $faq->question ?? '') }}" autocomplete="title" autofocus>

                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" class="input">
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Link</label>
                <div class="control">
                    <input type="text" name="link" class="input">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
