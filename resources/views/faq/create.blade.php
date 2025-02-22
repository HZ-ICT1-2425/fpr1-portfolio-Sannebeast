<x-layout.main>
    <div class="box">
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <h1>Create a New FAQ Post</h1>
            <h2>Please fill out all the form fields and click 'Submit'</h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" class="input" autofocus>
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
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
