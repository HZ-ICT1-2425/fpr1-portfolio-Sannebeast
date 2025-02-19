<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #2C2C34;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
{{--<details class="blog_item">--}}
        <div class="has-text-right is-flex is-flex-direction-column gap-2">
            <a href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">Edit</a>

            <!-- Unique Delete Button -->
            <button id="deleteBtn{{ $blog->id }}" class="button">Delete</button>

            <!-- Unique Modal -->
            <div id="deleteModal{{ $blog->id }}" class="modal">
                <div class="modal-content">
                    <span class="close closeBtn" data-id="{{ $blog->id }}">&times;</span>
                    <p class="has-text-centered">ARE YOU SURE YOU WANT TO DELETE????????</p>
                    <div class="level">
                        <form action="{{ route('blogs.delete', ['blog' => $blog->id]) }}" method="POST">
                        @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger">Delete</button>
                        </form>
                        <button class="button is-primary closeBtn" data-id="{{ $blog->id }}">NO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--</details>--}}
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
