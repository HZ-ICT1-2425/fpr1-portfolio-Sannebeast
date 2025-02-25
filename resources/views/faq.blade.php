<x-layout.main>
    <body>
    <h2 style="text-align: center; margin-top: 2%;">Frequent Asked Questions</h2>
    <ul class="accordion">
        @foreach($faqs as $faq)
            <li>
            <x-faq.faq-item :faq="$faq"></x-faq.faq-item>
            </li>
        @endforeach
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
    </ul>

    <a href="{{ route ('faq.create') }}" class="button">Make New FAQ Post</a>
    </body>
</x-layout.main>
