<x-layout.main>
    <div class="box">
        <form action="{{ route('faq.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>Edit FAQ Post</h1>
            <h2>Please fill out all the form fields and click 'Submit'</h2>
            <div class="field">
                <label for="question" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="question" id="question" placeholder="Enter the question..."
                           class="input @error('question') is-danger @enderror"
                           value="{{ old('question', $faq->question) }}" autocomplete="question" autofocus>
                    @error('question')
                    <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label for="answer" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="answer" id="answer" placeholder="Enter the answer..."
                           class="input @error('question') is-danger @enderror"
                           value="{{ old('answer', $faq->answer) }}" autocomplete="answer" autofocus>
                    @error('answer')
                    <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label for="link" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="link" id="link" placeholder="Enter the link..."
                           class="input @error('question') is-danger @enderror"
                           value="{{ old('link', $faq->link) }}" autocomplete="link" autofocus>
                    @error('link')
                    <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                    @enderror
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
