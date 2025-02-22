<x-layout.main>
    <body>
    <h2 style="text-align: center; margin-top: 2%;">Frequent Asked Questions</h2>
    <ul class="accordion">
        <li>
            <input type="checkbox" name="accordion" id="first">
            <label for="first">How can you print a document from your laptop at HZ?</label>
            <div class="content">
                <p>
                    • Open the following <a href="https://hz.mynetpay.nl/">link</a> in your browser: <br>
                    • Log in with your HZ username and password<br>
                    • Tap Web Print<br>
                    • At Step 1: Select a printer, check the settings (format, single/double sided etc.)<br>
                    • Click in the field at Step 2: Select files to choose your files (you can also drag and drop)
                    • Click on Upload files now
                </p>
            </div>
        </li>
        <li>
            <input type="checkbox" name="accordion" id="second">
            <label for="second">How can you scan a document and send it to your laptop at HZ?</label>
            <div class="content">
                <p>
                    • Log on to the printer using your HZ card or by entering your HZ user name & password.<br>
                    • Choose the Scan option in the menu.<br>
                    • Place the original(s) on the feeder or glass plate.<br>
                    Double-sided scanning (optional)
                    • Press Change settings
                    • For duplex mode, select the 2-sided option<br>
                    • Press Start
                    • After scanning, press the following symbol on the printer to log off:
                    <img width="10px" height="10px"
                         src="https://cdn.vectorstock.com/i/500p/96/96/exit-icon-vector-10919696.avif">
                </p>
            </div>
        </li>
        <li>
            <input type="checkbox" name="accordion" id="third">
            <label for="third">How can I buy something (like when I sign up for the IT introduction event) on the HZ web
                shop?</label>
            <div class="content">
                <p>
                    • Go to the <a target="_blank" href="https://webshop.hz.nl/WebshopApp/default.aspx?menu=082076044027019251066025111065201099237062130097">HZ
                        webshop</a><br>
                    • Log in.<br>
                    • Search for the product you want and select the option you want<br>
                    • Click on "Add to Shopping Cart"<br>
                    • Go to "SHOPPING CART" on the top of the page.<br>
                    • Click on "CHECKOUT".<br>
                    • Choose paying method.<br>
                    • Click on "Next" and follow the instructions on your screen.<br>
                </p>
            </div>
        </li>
        <li>
            <input type="checkbox" name="accordion" id="fourth">
            <label for="fourth">How can you book a project space?</label>
            <div class="content">
                <p>
                    • Go to the home page of the Self Service Portal<br>
                    • Click on Reservations<br>
                    • Choose the appropriate category and search for the "resource" you want to reserve. If necessary,
                    use the Type filter to turn certain items on/off in the overview.<br>
                    • Select the day when the resource is borrowed<br>
                    • By dragging the left mouse button, indicate the time period when the resource is borrowed<br>
                    • Click Next<br>
                    • Read the loan conditions, check the reservation and click Next<br>
                    • Fill in the necessary information and click Submit request
                </p>
            </div>
        </li>
        <li>
            <input type="checkbox" name="accordion" id="fith">
            <label for="fith">What are the instructions if you want to park your car at the HZ parking lot?</label>
            <div class="content">
                <p>
                    • Go to the parking lot (Kousteensedijk 1 - 4331 - JE Middelburg).<br>
                    • Push on the botton to get a ticket <br>
                    • Go to hz and ask for a voucher<br>
                    • When you drive out. Use the voucher instead of your ticket and you parked for free<br>
                </p>
            </div>
        </li>
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
