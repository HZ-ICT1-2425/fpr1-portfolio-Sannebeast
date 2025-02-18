<x-layout.main>
    <body>
    <div class="container">
    @foreach($blogs as $blog)
        <div class="blog-block">
            <h2>{{ $blog->title }}</h2><button id="deleteBtn{{ $blog->id }}">Delete</button>
            <br>
            <a href="{{ route('blogs.show', $blog) }}">
            Read more...</a>
        </div>

            <div id="deleteModal{{ $blog->id }}" class="modal">
                <div class="modal-content">
                    <span class="close closeBtn" data-id="{{ $blog->id }}">&times;</span>
                    <p class="has-text-centered">ARE YOU SURE YOU WANT TO DELETE????????</p>
                    <div class="level">
                        <form action="{{ route('blogs.delete', $blog->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    document.querySelectorAll("[id^='deleteBtn']").forEach((button) => {
                        button.addEventListener("click", function () {
                            const id = this.id.replace("deleteBtn", ""); // Extract FAQ ID
                            document.getElementById("deleteModal" + id).style.display = "block";
                        });
                    });

                    document.querySelectorAll(".closeBtn").forEach((button) => {
                        button.addEventListener("click", function () {
                            const id = this.dataset.id; // Get ID from data attribute
                            document.getElementById("deleteModal" + id).style.display = "none";
                        });
                    });

                    window.addEventListener("click", function (event) {
                        document.querySelectorAll("[id^='deleteModal']").forEach((modal) => {
                            if (event.target === modal) {
                                modal.style.display = "none";
                            }
                        });
                    });
                });
            </script>
    @endforeach
    </div>
    <a href="{{ route ('blogs.create') }}" class="button">Make New Blog Post</a>
    </body>
</x-layout.main>
